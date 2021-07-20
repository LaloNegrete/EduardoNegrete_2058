<?php
    session_start();
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'users_gimnasio';

    try{
        $conexion = new PDO("mysql:host=$server;dbname=$database;",$username, $password);
    }catch(PDOException $error){
        die('Conexion fallida: ' .$error->getMessage());
    }
    
?>