<?php
session_start();
require '__dao.php';
$from_page = $_SERVER['HTTP_REFERER'];

createUser($_POST['user_id'], $_POST['password'], $_POST['category_id'], $_POST['first_name'], $_POST['last_name']);

header("Location: $from_page");