<?php
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
    else{
        $errors["pc"] = "password And Password Confirmation must be equal";
    }