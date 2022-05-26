<?php
//Conecta com o db
include("conecta.php");
$usuario= $_SESSION["user"];
//Faz a confirmação de nome e senha no db
$menu_query = "SELECT * FROM usuario WHERE login='".$usuario."' AND tipo='Administrador'";
$result = $conn->query($menu_query);
    if ($result->num_rows > 0){
        echo "<li role='presentation' class='active'><a href='sistema.php'>HOME</a></li>";
        echo "<li role='presentation'><a href='cliente.php'>CLIENTES</a></li>";
        echo "<li role='presentation'><a href='produto.php'>PRODUTOS</a></li>";
        echo "<li role='presentation'><a href='convenio.php'>CONVÊNIOS</a></li>";
        echo "<li role='presentation'><a href='linhacredito.php'>LINHAS DE CRÉDITO</a></li>";
        echo "<li role='presentation'><a href='usuario.php'>USUÁRIOS</a></li>";
        echo "<li role='presentation'><a href='aviso.php'>AVISOS</a></li>";
        echo "<li role='presentation'><a href='retornoadm.php'>RETORNOS</a></li>";
        echo "<li role='presentation'><a href='relatorio.php'>RELATÓRIOS</a></li>";
    } else {
        echo "<li role='presentation' class='active'><a href='sistema.php'>HOME</a></li>";
        echo "<li role='presentation'><a href='cliente.php'>CLIENTES</a></li>";
        echo "<li role='presentation'><a href='retornopad.php'>RETORNOS</a></li>";
    }
?>