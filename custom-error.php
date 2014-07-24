<?php
/*
Template Name: Página de Erro
*/
$erroCodigo = $_GET["ID"];
header("HTTP/1.1 200 OK");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Erro! - Secomp 2012</title>
		<link href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/css/errorStyle.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div id="EspacoLogotipo"></div>
		<div id="Erro"><div class="BoxBorder">
			<h1>Ooooops! Algo deu errado...</h1>
			<p>Parece que tivemos um pequeno problema em nossa comunicação com você. Se o erro persistir, entre em contato com o administrador.</p>
			<?php
				switch ($erroCodigo){
					case 400:
						echo "<h2>$erroCodigo - Bad Request!</h2>";
						break;
					case 401:
						echo "<h2>$erroCodigo - Auth Required!</h2>";
						break;
					case 402:
						echo "<h2>$erroCodigo - Payment Required!</h2>";
						break;
					case 403:
						echo "<h2>$erroCodigo - Forbidden!</h2>";
						break;
					case 404:
						echo "<h2>$erroCodigo - Not Found!</h2>";
						break;
					case 405:
						echo "<h2>$erroCodigo - Method Not Allowed!</h2>";
						break;
					case 406:
						echo "<h2>$erroCodigo - Proxy Auth Repid!</h2>";
						break;
					case 407:
						echo "<h2>$erroCodigo - Request Timeout!</h2>";
						break;
					case 408:
						echo "<h2>$erroCodigo - Conflicting Request!</h2>";
						break;
					case 409:
						echo "<h2>$erroCodigo - Gone!</h2>";
						break;
					case 410:
						echo "<h2>$erroCodigo - Content Len Req'd!</h2>";
						break;
					case 411:
						echo "<h2>$erroCodigo - Precondition Failed!</h2>";
						break;
					case 412:
						echo "<h2>$erroCodigo - Entity Too Long!</h2>";
						break;
					case 413:
						echo "<h2>$erroCodigo - URI Too Long!</h2>";
						break;
					case 414:
						echo "<h2>$erroCodigo - Bad Request!</h2>";
						break;
					case 500:
						echo "<h2>$erroCodigo - Internal Server Error!</h2>";
						break;
					case 501:
						echo "<h2>$erroCodigo - Not Implemented!</h2>";
						break;
					case 502:
						echo "<h2>$erroCodigo - Bad Gateway!</h2>";
						break;
					case 503:
						echo "<h2>$erroCodigo - Service Unavailable!</h2>";
						break;
					case 504:
						echo "<h2>$erroCodigo - Gateway Timeout!</h2>";
						break;
					case 505:
						echo "<h2>$erroCodigo - HTPP Version Not Supported!</h2>";
						break;
					default:
						echo "<h2>$erroCodigo - Erro desconhecido!</h2>";
						break;
				}
			?>
			<div class="JumpNext"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/" alt="Inicial">Clique aqui para voltar ao começo</a></div>
		</div></div>
		<div id="BoxCopyright" class="container_16">Alguns direitos reservados (c) Copyright 2012. Site desenvolvido por Thiago Yukio Itagaki.<br/>
Este site contém imagens e conteúdo licenciado para uso não-comercial e se encontram devidamente listados e atribuídos.</div>
	</body>
</html>