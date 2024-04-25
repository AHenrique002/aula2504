<?php
//Configurações de credenciais
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "matricula"; 
//Conexão com nosso banco de dados
$conn = new mysqli($servidor,$usuario,$senha,$banco);
//Verificando a conexão
if ($conn->connect_error) {
    die("Falha ao se comunicar com o Banco de Dados:".$conn->connect_error);
}
?>