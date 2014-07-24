<?php
/*
Template Name: Página de Recuperação de Senha
*/
include_once($_SERVER['DOCUMENT_ROOT']."/../config/global.def.cfg");

?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Recuperação de Senha - Secomp <?php echo date("Y"); ?></title>
		<link href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/css/style2.css" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/parsley.js"></script>
	</head>
	<body id="painel-login">
		<?php include($_SERVER['DOCUMENT_ROOT']."/../view/template/header.php"); ?>
		<section id="body">
			<div class="outer-content" style="width: 482px;">
				<div class="inner-content container_16" style="width: 480px;">
					<div class="grid_8">
						<h1>Recuperação de Senha</h1>
					<?php
					if (isset($_GET["hash"]) && isset($_GET["email"]) && isset($_POST["secomp_recuperar"])){
						Requisition::newClass(array("usuario","database"));
						if (strlen($_POST["secomp_senha"])>=5 && $_POST["secomp_senha"]==$_POST["secomp_confirmasenha"]){
							if(UsuarioCore::recoverPassword($_GET["email"],$_GET["hash"],$_POST["secomp_senha"])){
								header("Location: http://".$_SERVER["HTTP_HOST"]."/painel/");
								die();
							}
						}
						header("Location: http://".$_SERVER["HTTP_HOST"]."/esqueci-senha/");
						die();
					}else if (isset($_GET["hash"]) && isset($_GET["email"])){
						Requisition::newClass(array("usuario"));
						if(UsuarioCore::checkRecoverHash($_GET["email"],$_GET["hash"])){
					?>
						<p>Por favor entre com sua nova senha:</p>
						<form method="post" data-validate="parsley">
							<div class="grid_40p text-hright"><label for="secomp-senha">Senha</label></div>
							<div class="grid_60p"><input type="password" id="secomp-senha" name="secomp_senha" data-minlength="5" data-required="true"/></div>
							<div class="grid_40p text-hright"><label for="secomp-confirmasenha">Confirmação de Senha</label></div>
							<div class="grid_60p"><input type="password" id="secomp-confirmasenha" name="secomp_confirmasenha" data-equalto="#secomp-senha" data-required="true"/></div>
							<div class="grid_35p prefix_40p"><input type="submit" name="secomp_recuperar" value="Alterar"/></div>
						</form>
					<?php
						}else header("Location: http://".$_SERVER["HTTP_HOST"]."/esqueci-senha/");
					}else if (isset($_POST["secomp_email"])){
						Requisition::newClass(array("usuario"));
						if(UsuarioCore::sendRecoverPassword($_POST["secomp_email"])){
					?>
						<p>Um email foi enviado! Verifique sua caixa de entrada e siga as instruções.</p>
					<?php
						}else{
					?>
						<p>O email informado não foi encontrado.</p>
					<?php
						}
					}else{
					?>
						<p>Esqueceu sua senha? Por favor, entre com seu endereço de email:</p>
						<form method="post">
							<div class="grid_30p text-hright"><label for="secomp-usuario">Email</label></div>
							<div class="grid_70p"><input type="text" id="secomp-usuario" name="secomp_email"/></div>
							<div class="grid_35p prefix_30p"><input type="submit" name="secomp_recuperar" value="Recuperar"/></div>
						</form>
					<?php
					}
					?>
					</div>
				</div>
			</div>
		</section>
		<?php include($_SERVER['DOCUMENT_ROOT']."/../view/template/footer.php"); ?>