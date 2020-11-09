<?php
// Initialisation de la session
header("Cache-Control: no-cache");

// Chargement Smarty et Defines
require('defines.inc.php');
require(_PATH_ . 'web/tools/smarty/Smarty.class.php');

// Chargement du coeur
$files = scandir(_CORE_);
foreach ($files as $filename)
{
    if (is_file(_CORE_.$filename))
        require_once(_CORE_.$filename);
}

// Connexion Database
try {
$bdd = new PDO("mysql:host=localhost;dbname=webapp", "debian-sys-maint", "aR7RIRZbiUZw3dYk");
$bdd->query("SET NAMES UTF8");
} catch (Exception $e) {
    echo "Problème de connexion à la base de donnée Tidal...";
    die();
}

// Initialisation Smarty
$smarty = new Smarty();

?>