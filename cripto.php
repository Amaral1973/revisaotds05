<?php
    $nome = "Ana Rufina";
    $cripto = base64_encode($nome);
    $descripto = base64_decode($cripto);
    echo "<h3>$nome</h3>";
    echo "<hr>";
    echo "<h3>$cripto</h3>";
    echo "<hr>";
    echo "<h3>$descripto</h3>";
?>