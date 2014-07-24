<?php
/*
Template Name: Página de Cadastro
*/
include_once($_SERVER['DOCUMENT_ROOT']."/../config/global.def.cfg");
$error = NULL;
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Secomp <?php echo date("Y"); ?></title>
		<link href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/css/style2.css" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/jquery-2.0.3.min.js"></script>
		<script type="text/javascript" src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/parsley.js"></script>
		<script type="text/javascript" src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/masked-input.min.js"></script>
		<script type="text/javascript" src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/cadastro.script.js"></script>
	</head>
	<body id="painel-cadastro">
		<?php include($_SERVER['DOCUMENT_ROOT']."/../view/template/header.php"); ?>
		<section id="body">
			<?php if (!isset($_POST["occupation"]) && !isset($_POST["Estudante"])){ ?>
			<div class="outer-content" style="width: 482px">
				<div class="inner-content container_16" style="width: 480px">
					<form method="post" class="grid_8">
						<span class="text-center" style="display: block;">Por favor, primeiramente identifique sua ocupação:</span>
						<div id="occup-select">
							<input id="" type="submit" name="occupation" value="Universitário" class="btn-occupation"><input id="" type="submit" name="occupation" value="Profissional"  class="btn-occupation">
						</div>
					</form>
				</div>
			</div>
			<?php
				}else if($_POST["occupation"]=="Universitário" || isset($_POST["Estudante"])){
					$data = array(
						"Nome"=>NULL,
						"Email"=>NULL,
						"Instituicao"=>NULL,
						"RA"=>NULL,
						"Curso"=>NULL,
						"AnoIngresso"=>NULL,
						"AnoConclusao"=>NULL,
						"Nascimento"=>NULL,
						"RG"=>NULL,
						"CPF"=>NULL,
						"Endereco"=>NULL,
						"CEP"=>NULL,
						"Cidade"=>NULL,
						"UF"=>NULL,
						"Pais"=>NULL,
						"Telefone"=>array(),
					);

					if (isset($_POST["Estudante"])){
						Requisition::newClass(array("usuario","auth"));
						foreach ($data as $field=>&$value) if (isset($_POST[$field])) $value = $_POST[$field];

						try{
							$_POST["Nascimento"] = date("Y-m-d",dateToSQL($_POST["Nascimento"]));
							$_POST["Login"] = $_POST["Email"];
							$_POST["Grupo"] = 1;
							if (strlen($_POST["Telefone"][1]<14)) unset($_POST["Telefone"][1]);
							foreach ($_POST as &$value) if (!strlen($value)) $value = NULL;
							$us = new Usuario($_POST);
							$us->SQLInsert();
							
							$auth = Auth::getInstance();
							if($auth->generateSession($us)){ ?>
								<div class="outer-content">
									<div class="inner-content container_16">
										<script type="text/javascript">
											window.setTimeout(function(){
												window.location="http://<?php echo $_SERVER['HTTP_HOST']; ?>/painel/";
											},1500);
										</script>
										<p style="display:block; text-align: center;">Você esta sendo redirecionado... Caso não deseja esperar, <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/painel/">clique aqui</a>.</p>
									</div>
								</div>
							</section>
							<?php
								include($_SERVER['DOCUMENT_ROOT']."/../view/template/footer.php");
								die();
							}
						}catch(PDOException $e){
							if ($e->getCode()==23000){
								if (strpos($e->getMessage(),"CPF"))
									$error = "Este CPF já se encontra em uso. Recupere sua conta <a href='http://secomp.com.br/recuperar-senha/'>aqui</a>.";
								else if(strpos($e->getMessage(),"Email") || strpos($e->getMessage(),"Login"))
									$error = "Este Email já se encontra em uso. Recupere sua conta <a href='http://secomp.com.br/recuperar-senha/'>aqui</a>.";
								else
									$error = "Algo inexplicável aconteceu e os administradores do site já receberam um relatório do problema. Por favor, tente novamente!";
								Requisition::newClass(array("mail"));
								Mailing::sendErrorReport($us,$e);

							}
						}catch(Exception $e){
							if ($e->getCode()>0) $error = $e->getMessage();
						}
					}
			?>
			<div class="outer-content">
				<div class="inner-content container_16">
					<form method="post" class="grid_16" data-validate="parsley">
						<p>Você se identificou como <strong>estudante</strong>. Por favor, preencha com seus dados abaixo.</p>
						<?php if(isset($error)): ?>
						<p style="color:#900;"><strong>Erro: </strong><?php echo $error; ?></p>
						<?php endif; ?>
						<h1>Cadastro</h1>
						<div class="grid_2 alpha">
							<label for="form-nome">Nome Completo*</label>
						</div>
						<div class="grid_5">
							<input id="form-nome" type="text" name="Nome" value="<?php echo $data["Nome"]; ?>" data-minlength="3" data-required="true" tabindex="1" style="width:250px;"/>
						</div>
						<div class="grid_3">
							<label for="form-senha">Senha*</label>
						</div>
						<div class="grid_3">
							<input id="form-senha" type="password" name="Senha" data-minlength="5" data-required="true" tabindex="3"/>
						</div>
						<div class="clearfix"></div>
						<div class="grid_2 alpha">
							<label for="form-email">Email*</label>
						</div>
						<div class="grid_5">
							<input id="form-email" type="text" name="Email" value="<?php echo $data["Email"]; ?>" data-type="email" data-required="true" tabindex="2" style="width:250px;"/>
						</div>
						<div class="grid_3">
							<label for="form-confirma">Confirmação de Senha*</label>
						</div>
						<div class="grid_3">
							<input id="form-confirma" type="password" name="SenhaConfirma" value="" data-equalto="#form-senha" tabindex="4" data-required="true"/>
						</div>
						<div class="clearfix"></div>
						<h1>Dados Acadêmicos</h1>
						<div class="grid_3 alpha">
							<label for="form-universidade">Faculdade/Universidade*</label>
						</div>
						<div class="grid_3">
							<select id="form-universidade" name="Instituicao" data-required="true" tabindex="5">
								<option value="UNICAMP">Unicamp</option>
								<option value="USP">USP</option>
								<option value="UNESP">UNESP</option>
								<option value="UFSCar">UFSCar</option>
								<option value="UNIFESP">UNIFESP</option>
								<option value="Pública">Outra Pública</option>
								<option value="Mackenzie">Mackenzie</option>
								<option value="PUC-Campinas">PUC-Campinas</option>
								<option value="PUC-São Paulo">PUC-São Paulo</option>
								<option value="Particular">Outra Particular</option>
							</select>
						</div>
						<div class="grid_1">
							<label for="form-ra">RA</label>
						</div>
						<div class="grid_2">
							<input id="form-ra" type="text" name="RA" value="<?php echo $data["RA"]; ?>" data-type="alphanum" tabindex="6"/>
						</div>
						<div class="grid_2">
							<label for="form-curso">Curso*</label>
						</div>
						<div class="grid_5 omega">
							<select id="form-curso" name="Curso" data-required="true" tabindex="7">
								<option value="1" <?php if($data["Curso"]=="1") echo "selected"; ?>>Engenharia de Computação</option>
								<option value="32" <?php if($data["Curso"]=="32") echo "selected"; ?>>Ciência da Computação</option>
								<option value="2" <?php if($data["Curso"]=="2") echo "selected"; ?>>Engenharia Elétrica</option>
								<option value="30" <?php if($data["Curso"]=="30") echo "selected"; ?>>Análise de Sistemas</option>
								<option value="31" <?php if($data["Curso"]=="31") echo "selected"; ?>>Sistemas de Informação</option>
								<option value="3" <?php if($data["Curso"]=="3") echo "selected"; ?>>Engenharia de Controle e Automação</option>
								<option value="4" <?php if($data["Curso"]=="4") echo "selected"; ?>>Engenharia Mecânica</option>
								<option value="5" <?php if($data["Curso"]=="5") echo "selected"; ?>>Engenharia de Telecomunicações</option>
								<option value="6" <?php if($data["Curso"]=="6") echo "selected"; ?>>Engenharia Civíl</option>
								<option value="7" <?php if($data["Curso"]=="7") echo "selected"; ?>>Engenharia Química</option>
								<option value="50" <?php if($data["Curso"]=="50") echo "selected"; ?>>Matemática</option>
								<option value="51" <?php if($data["Curso"]=="51") echo "selected"; ?>>Estatística</option>
								<option value="52" <?php if($data["Curso"]=="52") echo "selected"; ?>>Física</option>
								<option value="0" <?php if($data["Curso"]=="0") echo "selected"; ?>>Outros</option>
							</select>
						</div>
						<div class="clearfix"></div>
						<div class="grid_3 alpha">
							<label for="form-ingresso">Ano de Ingresso*</label>
						</div>
						<div class="grid_2">
							<select id="form-ingresso" name="AnoIngresso" data-required="true" tabindex="8">
								<?php for($i=intval(date("Y"));$i>(intval(date("Y"))-90);$i--){ ?>
									<option value="<?php echo $i; ?>" <?php if($data["AnoIngresso"]==$i) echo "selected"; ?>><?php echo $i; ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="grid_2">
							<label for="form-conclusao">Conclusão</label>
						</div>
						<div class="grid_2 omega">
							<select id="form-conclusao" name="AnoConclusao" tabindex="9">
									<option></option>
								<?php for($i=(intval(date("Y"))+5);$i>(intval(date("Y"))-90);$i--){ ?>
									<option value="<?php echo $i; ?>" <?php if($data["AnoConclusao"]==$i) echo "selected"; ?>><?php echo $i; ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="clearfix"></div>
						<h1>Dados Pessoais</h1>
						<div class="grid_2 alpha">
							<label for="form-nascimento">Nascimento*</label>
						</div>
						<div class="grid_2">
							<input id="form-nascimento" type="text" name="Nascimento" value="<?php echo $data["Nascimento"]; ?>" data-required="true" tabindex="10" style="width:95px;"/>
						</div>
						<div class="grid_1">
							<label for="form-rg">RG</label>
						</div>
						<div class="grid_3">
							<input id="form-rg" type="text" name="RG" value="<?php echo $data["RG"]; ?>" data-type="alphanum" tabindex="11" style="width:155px;"/>
						</div>
						<div class="grid_1">
							<label for="form-cpf">CPF</label>
						</div>
						<div class="grid_2 omega">
							<input id="form-cpf" type="text" name="CPF" value="<?php echo $data["CPF"]; ?>" tabindex="12" style="width:90px;"/>
						</div>
						<div class="clearfix"></div>
						<div class="grid_2 alpha">
							<label for="form-endereco">Endereço</label>
						</div>
						<div class="grid_5">
							<input id="form-endereco" type="text" name="Endereco" value="<?php echo $data["Endereco"]; ?>" data-minlength="4" tabindex="13" style="width:335px;"/>
						</div>
						<div class="grid_2">
							<label for="form-cep">CEP</label>
						</div>
						<div class="grid_2 omega">
							<input id="form-cep" type="text" name="CEP" value="<?php echo $data["CEP"]; ?>" data-minlength="3" data-regexp="[0-9]{5}\-[0-9]{3}" tabindex="14" style="width:90px;"/>
						</div>
						<div class="clearfix"></div>
						<div class="grid_2 alpha">
							<label for="form-cidade">Cidade</label>
						</div>
						<div class="grid_3">
							<input id="form-cidade" type="text" name="Cidade" value="<?php echo $data["Cidade"]; ?>" data-minlength="3" tabindex="15" style="width:155px;"/>
						</div>
						<div class="grid_1">
							<label for="form-estado">Estado</label>
						</div>
						<div class="grid_1">
							<input id="form-estado" type="text" name="UF" value="<?php echo $data["UF"]; ?>" maxlength="2" data-minlength="2" tabindex="16" style="width:30px;"/>
						</div>
						<div class="grid_1">
							<label for="form-pais">País</label>
						</div>
						<div class="grid_3 omega">
							<input id="form-pais" type="text" name="Pais" value="<?php echo $data["Pais"]; ?>" tabindex="17" style="width:150px;"/>
						</div>
						<div class="clearfix"></div>
						<div class="grid_2 alpha">
							<label for="form-telefone">Telefone*</label>
						</div>
						<div class="grid_2">
							<input id="form-telefone" type="text" name="Telefone[]" value="<?php echo $data["Telefone"][0]; ?>" data-type="phone" data-required="true" tabindex="18" style="width:95px;"/>
						</div>
						<div class="grid_2">
							<label for="form-telefone2">Outro Telefone</label>
						</div>
						<div class="grid_2">
							<input id="form-telefone2" type="text" name="Telefone[]" value="<?php echo $data["Telefone"][1]; ?>" data-type="phone" tabindex="19" style="width:95px;"/>
						</div>
						<div class="clearfix"></div>
						<div class="grid_2 push_2 alpha form-btnholder">
							<input id="form-submit" type="submit" name="Estudante" value="Cadastrar" tabindex="20"/>
						</div>
					</form>
				</div>
			</div>
			<?php }else if($_POST["occupation"]=="Profissional"){ ?>
			<?php } ?>
		</section>
		<?php include($_SERVER['DOCUMENT_ROOT']."/../view/template/footer.php"); ?>