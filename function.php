<?php
/*--------require_once 'config.php';-------*/

function getFeaturedProducts() {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM products WHERE is_featured = 1");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getLatestProducts() {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM products WHERE is_latest = 1");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>