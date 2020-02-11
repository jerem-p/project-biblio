<?php

session_start();

$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$do = isset($_GET['do']) ? $_GET['do'] : '';

switch ($page) {
    case 'home':
        $page_name = 'Accueil';
        include 'page/home.php';
    break;
    
}
