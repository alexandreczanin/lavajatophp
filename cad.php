<?php 
    include 'conecta.php';
    $nome = $_POST['nome'];
    $celular = $_POST['celular'];
    $placa = $_POST['placa'];
    $cidade = $_POST['cidade'];
    $data_nascimento = $_POST['data_nascimento'];
    $sql= "INSERT INTO pessoa(nome,celular,placa,cidade,data_nascimento) VALUES ('$nome','$celular','$placa','$cidade','$data_nascimento')";
    if(mysqli_query($conn,$sql)){
        echo "<script language='javascript' type='text/javascript'> 
          alert('Registro inserido com sucesso.');
          window.location.href='loja.php';
          </script>";
    }
    else {
        echo "<script language='javascript' type='text/javascript'> 
          alert('Não foi possível inserir este registro.');
          window.location.href='loja.php'
          </script>";
    }
    mysqli_close($conn);
?>