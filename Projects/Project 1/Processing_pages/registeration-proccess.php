<?php
session_start();
require_once "../includes/db/database.php";

if ($_SERVER['REQUEST_METHOD'] === "POST") {

    $firstName = $_POST["first-name"];
    $last_name = $_POST["last-name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm-password"];
    $birthdate = $_POST["birthdate"];
    $course_level = $_POST["course-level"];
    $interests = $_POST["interests"] ?? [];
    $comments = $_POST["comments"];

    $error = [];

    if (empty($firstName))
        $error[] = "First Name is Required";
    if (empty($last_name))
        $error[] = "Last Name is Required";
    if (empty($email)) {
        $error[] = "Email is Required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }
    if (empty($username))
        $error[] = "Username is Required";
    if (empty($phone))
        $error[] = "Phone is Required";
    if (empty($password))
        $error[] = "Password is Required";
    if (empty($confirm_password))
        $error[] = "Confirm Password is Required";
    if (empty($birthdate))
        $error[] = "Birthdate is Required";
    if (empty($course_level))
        $error[] = "Select Course Level";
    if (empty($interests))
        $error[] = "Select Interests";

    if ($password !== $confirm_password) {
        $error[] = "Password Doesn't Match";
    }

    if (empty($error)) {
        try {
            $database = new Database();
            $db = $database->getConnection();

            $name = $firstName . " " . $last_name;
            $interest = implode(",", $interests);
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // Check Whether Email exist or not  

            $query = "SELECT * FROM users WHERE email = :email LIMIT 1;";
            $stmt = $db->prepare($query);

            $stmt->bindParam(":email", $email);

            $stmt->execute();

            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user) {
                $error[] = "User with this Email already exist.";
            } else {
                $query = "INSERT INTO users 
            (name, email, phone, username, password, birthdate, course_level, interests, comments) 
            VALUES 
            (:name, :email, :phone, :username, :password, :birthdate, :course_level, :interests, :comments)";

                $stmt = $db->prepare($query);

                $stmt->bindParam(":name", $name);
                $stmt->bindParam(":email", $email);
                $stmt->bindParam(":phone", $phone);
                $stmt->bindParam(":username", $username);
                $stmt->bindParam(":password", $hashedPassword);
                $stmt->bindParam(":birthdate", $birthdate);
                $stmt->bindParam(":course_level", $course_level);
                $stmt->bindParam(":interests", $interest);
                $stmt->bindParam(":comments", $comments);

                if ($stmt->execute()) {
                    $_SESSION["success_message"] = "Registration Successful!";
                    $_SESSION["errors"] = [];
                    header("Location: ../Status_pages/Success/registeration-success.php");
                    exit();
                } else {
                    $error[] = "Error in registration. Try again.";
                }
            }



        } catch (PDOException $e) {
            $error[] = "Database error: " . $e->getMessage();
        }
    }

    if (!empty($error)) {
        $_SESSION["errors"] = $error;
        $_SESSION["form_data"] = $_POST;
        header("Location: ../registeration.php");
        exit();
    }
}

?>