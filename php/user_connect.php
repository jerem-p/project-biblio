<?php
session_start();

$user = $_GET['user'];
$pass = $_GET['pass'];

$_SESSION['user'] = $user;
$_SESSION['pass'] = $pass;


header('Location: /index.php');