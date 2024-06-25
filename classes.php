<?php

    class user{
        public $id;
        public $name;
        public $email;
        public $address;
        public $phone;
        public $VIC;
        protected $password;

        public function __construct($id,$name,$email,$address,$phone,$VIC,$password){
            $this->id = $id;
            $this->name = $name;
            $this->email = $email;
            $this->address = $address;
            $this->phone = $phone;
            $this->VIC = $VIC;
            $this->password = $password;
        }
    }
    class Subscriber{
        public static function register($name,$email,$address,$phone,$VIC,$password){
            $qry = "INSERT INTO USERS (name,email,address,phone,vic,password)
            VALUES('$name','$email','$address','$phone','$VIC','$password')";
            require_once("config.php");
            $cn = mysqli_connect(DB_HOST,DB_USER_NAME,DB_USER_PASSWORD,DB_NAME);
            $rslt = mysqli_query($cn,$qry);
            mysqli_close($cn);
            return $rslt;
        }
    }
    class Admin{

    }