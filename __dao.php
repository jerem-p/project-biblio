<?php

function newPDO()
{
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=biblio_db;charset=utf8', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $exception) {
        header('Location: index.php');
    }
    return $pdo;
}

function getUserInfo($user_name)
{
    $pdo = newPDO();
    $query = $pdo->query(
        "SELECT * FROM users NATURAL JOIN user_categories WHERE user_id='$user_name'"    // sql sur db
    );
    return $query->fetch();
}
