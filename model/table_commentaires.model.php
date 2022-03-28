<?php

// Table model

include("config/config.inc.php");
include("model/pdo.inc.php");

try {
    $query = "SELECT comment_content, display_name , post_title
    FROM blog_comments

    INNER JOIN blog_users
    ON ID = comment_author

    INNER JOIN blog_posts
    ON post_ID = comment_post_ID
    ";
    
$req = $pdo->query($query);

$data = $req->fetchAll();
// var_dump($data);

} catch(Exception $e) {
    die("Erreur MySQL : " . $e->getMessage());
}