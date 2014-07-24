<?php
/*
Template Name: Página de Login
*/

include ($_SERVER["DOCUMENT_ROOT"]."/../config/global.def.cfg");

Requisition::newClass(array("auth"));
$auth = Auth::getInstance();


if ($auth->validateSession()){
	header("Location: http://".$_SERVER["HTTP_HOST"]."/painel/");
	die();
}

if (isset($_POST["secomp_entrar"])){
	if($auth->startSession($_POST["secomp_usuario"],$_POST["secomp_senha"])){
		if (isset($_GET["REDIR"])) header("Location: ".$_GET["REDIR"]);
		else header("Location: http://".$_SERVER["HTTP_HOST"]."/painel/");
	}else $error = true;
}

?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Secomp <?php echo date("Y"); ?></title>
		<link href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/css/style2.css" rel="stylesheet" type="text/css">
	</head>
	<body id="painel-login">
		<?php include($_SERVER['DOCUMENT_ROOT']."/../view/template/header.php"); ?>
		<section id="body">
			<div class="outer-content" style="width: 482px;">
				<div class="inner-content container_16" style="width: 480px;">
					<div class="grid_8">
						<h1>Acesso ao Painel</h1>
						<form method="post">
							<div class="grid_30p text-hright"><label for="secomp-usuario">Login/Email</label></div>
							<div class="grid_70p"><input type="text" id="secomp-usuario" name="secomp_usuario"/></div>
							<div class="grid_30p text-hright"><label for="secomp-senha">Senha</label></div>
							<div class="grid_35p"><input type="password" id="secomp-senha" name="secomp_senha"/></div>
							<div class="grid_35p"><input type="submit" name="secomp_entrar" value="Acessar"/></div>
							<div class="grid_70p prefix_30p"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/cadastro/">» Cadastre-se</a></div>
							<div class="grid_70p prefix_30p"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/esqueci-senha/">» Esqueci minha senha</a></div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<?php include($_SERVER['DOCUMENT_ROOT']."/../view/template/footer.php"); ?>
	</body>
</html>