<?php

session_start();

require_once __DIR__ . "/../includes/db/database.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $database = new Database();
    $db = $database->getConnection();

    $error = [];

    if ($db) {
        try {
            $query = "SELECT * FROM users WHERE email = :email LIMIT 1;";
            $stmt = $db->prepare($query);

            $stmt->bindParam(":email", $email);

            $stmt->execute();

            $user = $stmt->fetch(PDO::FETCH_ASSOC);
 
            if ($user) {
                echo "Email found: " . htmlspecialchars($user['email']);
                if (password_verify($password, $user['password'])) {
                    $_SESSION["success_message"] = "Login Successful!";
                    $_SESSION["errors"] = [];
                    header("Location: ../Status_pages/Success/login-success.php");
                } else {
                    $error[] = "Invalid Password";
                }
            } else {
                $error[] = "No user found with this email";
            }
        } catch (PDOException $e) {
            echo "Database error: " . $e->getMessage();
        }
    } else {
        $error[] = "Database connection failed";
    }

    if (!empty($error)) {
        $_SESSION["errors"] = $error;
        $_SESSION["form_data"] = $_POST;
        header("Location: ../login.php");
        exit();
    }
}

?>