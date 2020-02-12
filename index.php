<?php

session_start();

$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$do = isset($_GET['do']) ? $_GET['do'] : '';

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
        include 'page/useraccount.php';
        break;


    case 'users':
        $title = 'Usagers';
        include 'page/users.php';
        break;
}
