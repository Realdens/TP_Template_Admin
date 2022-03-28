<?php

// Table model

include("config/config.inc.php");
include("model/pdo.inc.php");

try {
    $query = "SELECT post_title, display_name , cat_descr
    FROM blog_posts

    INNER JOIN blog_users
    ON post_author = ID

    INNER JOIN blog_categories
    ON post_category = cat_id
    ";
    
$req = $pdo->query($query);

$data = $req->fetchAll();
// var_dump($data);

} catch(Exception $e) {
    die("Erreur MySQL : " . $e->getMessage());
}