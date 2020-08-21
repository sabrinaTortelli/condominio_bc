<?php
//Fazer a conexão com o BD, ip do servidor, nome do usuário, senha do usuário, nome do BD

/** @var $mysqli array */

$mysqli = new mysqli("localhost", "root", "suaSenha", "condominio");

if(mysqli_connect_error()){
    echo "Erro ao conectar com o BD: " . mysqli_connect_error();
    exit();
}
