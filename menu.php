<?php
    include 'conecta.php';
    $usuario = $_SESSION["user"];
    $menu_query = "SELECT * FROM usuario WHERE login='".$usuario."' AND tipo='Administrador'";
    $result = $conn->query($menu_query);
    if($result->num_rows>0){
        echo "   ";
        echo "<a href='loja.php' type='button' class='btn btn-outline-dark'>HOME</a>";
        echo " ";
        echo "<a href='usuario.php' type='button' class='btn btn-outline-dark'>USUÁRIO</a>";
        echo " ";
        echo "<a href='sair.php' type='button' class='btn btn-outline-dark'>SAIR</a>";
    }
    else {
        echo "<a href='loja.php' type='button' class='btn btn-outline-dark'>HOME</a>";
        echo " ";
        echo "<a href='sair.php' type='button' class='btn btn-outline-dark'>SAIR</a>"; 
    }
?>