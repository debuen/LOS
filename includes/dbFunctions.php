<?php

$g_link = false;

function notFound() {
	header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found", true, 404);	
	require_once($_SERVER['DOCUMENT_ROOT']."/Marc/notFound.php");
	exit;
}

function GetMyConnection() {
	global $g_link;
	if( !$g_link )
		$g_link = mysqli_connect( SERVER_NAME, USERNAME, PASSWORD, DATABASE_NAME) or die('Could not connect to server.' );
	return $g_link;
}

function connectToDB() {
	// Connectem al servidor de BBDD i connectem a la BDD "qidat"
	$mysqli = GetMyConnection();
	// Si hi ha error de connexió sortim
	if ($mysqli->connect_errno) {
		print($mysqli->error);
	}
	return $mysqli;
}

function disconnectDB() {
	global $g_link;
	if( $g_link != false )
	  $g_link->close();
	$g_link = false;
}

function getTableData($table, $where=null) {
	$mysqli = connectToDB();
	$resultat = $mysqli->query("select * from $table $where");
	$res = array();
	while ($dades = $resultat->fetch_assoc()) {
		$res[] = $dades;
	}
	$resultat->free();
	disconnectDB();
	return $res;
}

function execQuery($table, $fields, $values) {
	$mysqli = connectToDB();
	$mysqli->query("insert into $table (".$fields.") values (".$values.")");
	disconnectDB();
}
?>