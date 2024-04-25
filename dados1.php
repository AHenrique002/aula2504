<?php 
require_once "config.php";

//dados do formulario
$nome = $_POST["nome"];
$email = $_POST["email"];
$contato = $_POST["phone"];
$sexo = $_POST["sexo"]; 
$curso = $_POST["curso"];
$data_atual = date("d/m/Y");
$hora_atual = date("H:i:s");

//instruções para inserir dados ma tabela
$smtp = $conn->prepare("INSERT INTO alunos (nome,email,phone,sexo,curso,data,hora) VALUES(?,?,?,?,?,?,?)");
$smtp->bind_param("sssssss", $nome,$email,$contato,$sexo,$curso,$data_atual,$hora_atual);

if ($smtp->execute()) {
    echo "<h2>Parabéns, $nome, você está matriculado no curso de $curso.<h2>";
 }
 else {
     echo "<h2>Erro no envio da mensagem ".$smtp->error."</h2>";
 }
 
$smtp->close();
$conn->close();

?>