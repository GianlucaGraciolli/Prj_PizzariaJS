<?php
$base='http://localhost/projetopizzaria/app';
$db_host = 'localhost';
$db_port = 3306;
$db_name = 'jspizzaria_db';
$db_user = 'Gian48';
$db_pwd = 'aqwsderf1';

$pdo = new PDO('mysql:host='.$db_host.';dbname='.$db_name,$db_user,$db_pwd);