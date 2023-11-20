<?php
session_start();

if (isset($_POST["username"]) && isset($_POST["pass"])) {
    $user = new stdClass();
    $user->username = $_POST["username"];
    $user->firstname = $_POST["firstname"];
    $user->lastname = $_POST["lastname"];
    $user->email = $_POST["email"];
    $user->password = $_POST["pass"];
    $user->sex = $_POST["sex"];
    $user->birthdate = $_POST["birthdate"];

    $success = signin($user);
} 

if ($success) {
    $_SESSION["user"] = $user->username;  
    header("Location:../pages/myfirstpage.php");
} else {
    header("location:signin.php"); 
}

function signin($user)
{
    $jsonFile = "../json/user.json";

    $userData = file_get_contents($jsonFile);
    $users = json_decode($userData, true);

    foreach ($users as $existingUser) {
        if ($existingUser['username'] == $user->username) {
            return false;
        }
    }

    $users[] = [
        "username" => $user->username,
        "firstname" => $user->firstname,
        "lastname" => $user->lastname,
        "email" => $user->email,
        "password" => $user->password,
        "sex" => $user->sex,
        "birthdate" => $user->birthdate
    ];

    file_put_contents($jsonFile, json_encode($users, JSON_PRETTY_PRINT));

    return true;
}
?>
