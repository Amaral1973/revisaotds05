<?php
    include 'conecta.php';
    if((!isset($_SESSION['login'])==true)){
        header('location:ses.php');
    }
    $logado = $_SESSION['login'];
    $menu_query = "SELECT * FROM usuario WHERE login='$logado' AND tipo='admin'";
    $result = $conn->query($menu_query);
    if($result->num_rows > 0){
        echo "<a href='index3.php'>Próxima página</a><br/>";
        echo "<a href='sair.php'>Sair</a><br/>";
    } else {
        echo "<a href='sair.php'>Sair</a><br/>";
    }
?>