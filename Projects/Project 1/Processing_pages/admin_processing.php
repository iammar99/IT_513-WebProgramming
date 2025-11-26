<?php 
session_start();
require_once __DIR__ . "/../includes/db/database.php";

$database = new Database();
$db = $database->getConnection(); // PDO instance

$users = [];

if ($db) {
    $query = "SELECT * FROM users";
    $stmt = $db->prepare($query);
    $stmt->execute();

    $users = $stmt->fetchAll(PDO::FETCH_ASSOC); // get all users
}
