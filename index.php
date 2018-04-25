<?php
	require_once("config.php");

	$Sql = new Sql();

	$usuarios = $Sql->select("select * from tb_usuarios");

	echo json_encode($usuarios);

?>