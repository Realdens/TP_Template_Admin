<?php

// Table model

include("config/config.inc.php");
include("model/pdo.inc.php");

try {
    $query = "SELECT contact_name
    FROM blog_contacts
    GROUP BY contact_name
    ";
    
$req = $pdo->query($query);

$data = $req->fetchAll();
// var_dump($data);

} catch(Exception $e) {
    die("Erreur MySQL : " . $e->getMessage());
}