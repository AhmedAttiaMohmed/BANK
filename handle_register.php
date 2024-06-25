<?php
    session_start();
    $errors = [];
    if(empty($_REQUEST["name"])) $errors["name"] = "name is required";
    if(empty($_REQUEST["email"])) $errors["email"] = "Email is required";
    if(empty($_REQUEST["address"])) $errors["address"] = "Address is required";
    if(empty($_REQUEST["phone"])) $errors["phone"] = "Phone is required";
    if(empty($_REQUEST["vic"])) $errors["vic"] = "Phone is required";
    if(empty($_REQUEST["pw"]) || empty($_REQUEST["pc"])) 
    {
        $errors["pw"] = "Password is required";
    }
    else if($_REQUEST["pw"] != $_REQUEST["pc"]){
        $errors["pc"] = "password And Password Confirmation must be equal";
    }

    $name = htmlspecialchars(trim($_REQUEST["name"]));
    $email = htmlspecialchars(trim($_REQUEST["email"]));
    $name = htmlspecialchars(trim($_REQUEST["address"]));
    $name = htmlspecialchars(trim($_REQUEST["phone"]));
    $name = htmlspecialchars(trim($_REQUEST["vic"]));
    $password = htmlspecialchars(($_REQUEST["pw"]));
    $password = htmlspecialchars(($_REQUEST["pc"]));

    if(($_REQUEST["email"]) && (!filter_var($_REQUEST["email"],FILTER_VALIDATE_EMAIL))){
        $errors["email"] = "Email is invalid format please add aadd@gmail.com";
    }

    if(!empty($errors)){
        header("location:index.php");
    }
    else{
        $_SESSION["errors"] = $errors;
        header("location:register.php");
    }