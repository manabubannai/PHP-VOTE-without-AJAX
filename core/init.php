<?php
$host = "localhost";
$username = "root";
$password = "root";
$dbname = "vote_system";

$mysqli = new mysqli($host, $username, $password, $dbname);
$mysqli->set_charset("utf8");

if ($mysqli->connect_error) {
	error_log($mysqli->connect_error);
	exit;
}
