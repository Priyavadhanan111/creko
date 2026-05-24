<?php

$username = trim($_POST['username']);
$password = trim($_POST['password']);

if(empty($username) || empty($password)){
    echo "Please fill all fields";
    exit();
}

if($username === "admin" && $password === "1234"){
    echo "Welcome " . htmlspecialchars($username);
} else {
    echo "Login Failed";
}

?>