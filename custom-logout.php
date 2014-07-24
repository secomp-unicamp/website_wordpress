<?php
/*
Template Name: Página de Logout
*/
?>

<?php
include ($_SERVER["DOCUMENT_ROOT"]."/../config/global.def.cfg");

Requisition::newClass(array("auth"));
$auth = Auth::getInstance();
$auth->killSession();

header("Location: http://".$_SERVER["HTTP_HOST"]."/");
?>