<?php
session_start();


if (!isset($_GET['user_id'])) {     // depuis le lien "déconnexion"
    session_destroy();
} else {
    $user_id_input = $_GET['user_id'];      // depuis l'inputbox

    $pdo = new PDO('mysql:host=localhost;dbname=biblio_db', 'root', '');
    $query = $pdo->query(
        "SELECT * FROM users WHERE user_id='$user_id_input'"    // sql sur db
    );
    $user_data = $query->fetch();  // aller chercher les infos de l'utilisateur

    if (isset($user_data['user_id'])) {
        $_SESSION['user_id'] = $user_data['user_id'];   // confirmation du user_id
        $_SESSION['user_first_name'] = $user_data['first_name'];    // prénom à afficher en header
    }
}


header('Location: /index.php');
