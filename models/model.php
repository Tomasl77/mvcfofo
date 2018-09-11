<?php
session_start();
function connectDB() 
{

    $host ='localhost';
    $name='fofo2';
    $user="root";
    $pass='';
    $connexion;

    $DB = new PDO('mysql:host='.$host.';dbname='.$name, $user,$pass,array(
                    PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES UTF8',
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
                ));
    return $DB;
}

function signIn($pseudo, $mail, $password)
{
    $DB = connectDB();
    $sign = $DB->prepare('INSERT INTO user(pseudo, mail, password, signin_date) VALUES(?, ?, ?, NOW())');
    $signForm = $sign->execute(array($pseudo, $mail, $password));

    return $signForm;
}

function logIn($mail, $password)
{
    $DB = connectDB();
    $log = $DB->prepare('SELECT * FROM user WHERE mail = :mail AND password = :password', array('mail' => $mail, 'password' => password_hash($password, PASSWORD_DEFAULT)));
    $log->execute(array($mail,$password));
    $log = $log->fetch();
    if (!$log['mail']) 
    {
        $_SESSION['FLASH'] = "Votre mail ou votremot de passe est incorrect";
    }
}
