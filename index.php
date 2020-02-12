<?php

session_start();

$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$do = isset($_GET['do']) ? $_GET['do'] : '';

switch ($page) {
    case 'home':
        $title = 'Accueil';
        include 'page/home.php';
    break;


    case 'books':
        $title = 'Livres';
        include 'page/books.php';
    break;


    case 'account':
        $title = 'Mon compte';
        include 'page/useraccount.php';
    break;


    case 'users':
        $title = 'Usagers';
        include 'page/users.php';
    break;
    
}
