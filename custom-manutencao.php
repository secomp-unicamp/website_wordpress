<?php
/*
Template Name: Página de Manutenção
*/
$erroCodigo = $_GET["ID"];
header("HTTP/1.1 200 OK");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Manutenção! - Secomp 2012</title>
		<link href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/css/errorStyle.css" rel="stylesheet" type="text/css">
		<link href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/css/painelStyle.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div id="EspacoLogotipo"></div>
		<div id="Erro"><div class="BoxBorder">
			<h1>Estamos brevemente fechados!</h1>
			<p>O site está passando por atualização, e por isso fechamos-o temporáriamente. Pedimos desculpas pelo inconveniente.</p>
			<p>Previsão de retorno: 05/08/2012 - 06h00</p>
			<div class="JumpNext"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/" alt="Inicial">Clique aqui para voltar a página inicial</a></div>
		</div></div>
		<div id="BoxCopyright" class="container_16">Alguns direitos reservados (c) Copyright 2012. Site desenvolvido por Thiago Yukio Itagaki.<br/>
Este site contém imagens e conteúdo licenciado para uso não-comercial e se encontram devidamente listados e atribuídos.</div>
	</body>
</html>