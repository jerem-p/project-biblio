<?php

class Data extends PDO
{
    public function __construct($file = 'config.ini')   // $file PAR DEFAUT au moment de $data = new Data();
    {
        if (!$settings = parse_ini_file($file, TRUE)) throw new exception('Impossible d\'ouvrir ' . $file . '.');
        // définition de $settings EN MÊME TEMPS qu'on vérifie s'il est accessible pour renvoyer une erreur

        $dns = $settings['database']['driver'] .    // [database]\n driver = mysql\n
            ':host=' . $settings['database']['host'] .  // host = localhost\n
            ((!empty($settings['database']['port'])) ? (';port=' . $settings['database']['port']) : '') .
            // le port du serveur est facultatif
            ';dbname=' . $settings['database']['schema'] .  // host = localhost\n
            ((!empty($settings['database']['charset'])) ? (';charset=' . $settings['database']['charset']) : '');
        // le jeu de caractères est facultatif

        parent::__construct($dns, $settings['database']['username'], $settings['database']['password']);
        // insertion des paramètres de DRIVER, USERNAME, PASSWORD au sein de la fonction HERITEE de la classe PDO

        $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // modif de l'ERRMODE à la création (par défaut, PDO::ERRMODE_SILENT)
    }
}


