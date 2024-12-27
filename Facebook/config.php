<?php

    $dbHost = 'localhost';
    $dbUser = 'root';
    $dbPassword = '';
    $dbName = 'raphntc';


    $conexao = new mysqli($dbHost,$dbUser,$dbPassword,$dbName);

    // if($conexao->connect_errno)
    // {
    //   echo"erro";
    // }
    // else {
    //     echo"Conexão sucesso";
    // }
?>