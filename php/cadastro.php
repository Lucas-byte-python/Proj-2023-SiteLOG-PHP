<?php 
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'site_log';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
    if ($conexao->connect_errno){
    }
    else
    {
    }
?>