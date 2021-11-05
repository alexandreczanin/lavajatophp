<?php

  include 'conecta.php';

  $id = $_GET["id"];
  $nome = $_POST["nome"];
  $celular = $_POST["celular"];
  $placa = $_POST["placa"];
  $cidade = $_POST["cidade"];
  $data_nascimento = $_POST["data_nascimento"];

$sql = "UPDATE pessoa SET nome = ?, celular = ?, placa = ?, cidade = ?, data_nascimento = ? WHERE id = ?";
$stmt = $conn->prepare($sql) or die($conn->error);

if(!$stmt){
  echo 'Erro na atualização: '. $conn->errno .' - '. $conn->error;
}

$stmt->bind_param('ssssdi', $nome, $celular, $placa, $cidade, $data_nascimento, $id);
$stmt->execute();
$conn->close();
header("Location: index.php#tabs-4");
?>