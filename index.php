<?php

session_start();

$page = isset($_GET['page']) ? filter_var($_GET['page'], FILTER_SANITIZE_ENCODED) : 'home';    //filtrage
$do = isset($_GET['do']) ? filter_var($_GET['do'], FILTER_SANITIZE_ENCODED) : '';

switch ($page) {
    case 'home':
        switch ($do) {
            default:
                $title = 'Accueil';
                include 'page/home.php';
                break;
            case 'connect':
                include 'library/connect.php';
                break;
            case 'disconnect':
                include 'library/connect.php';
                break;
        }
        break;


    case 'books':
        switch ($do) {
            default:
                $title = 'Livres';
                include 'page/books.php';
                break;
            case 'search':
                $title = 'Livres';
                include 'page/books.php';
                break;
        }
        break;
        

    case 'account':
        $title = 'Mon compte';
        include 'page/account.php';
        break;


    case 'users':
        $title = 'Usagers';
        include 'page/users.php';
        break;
}
