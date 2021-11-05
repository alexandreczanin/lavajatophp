<?php
  include 'conecta.php';
  $id = $_GET["id"];
  $login = $_POST["login"];
  $senha = $_POST["senha"];
  $cripto = base64_encode($senha);
  $tipo = $_POST["tipo"];

$sql = "UPDATE usuario SET login = ?, senha = ?, tipo = ? WHERE id = ?";
$stmt = $conn->prepare($sql) or die($conn->error);
if(!$stmt){
  echo 'Erro na atualização: '. $conn->errno .' - '. $conn->error;
}
$stmt->bind_param('sssi', $login, $cripto, $tipo, $id);
$stmt->execute();
$conn->close();
header("Location: usuario.php#tabs-4");
?>