<?php 
    include 'conecta.php';
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $cripto = base64_encode($senha);
    $tipo = $_POST['tipo'];
    $query = $conn->query("SELECT * FROM usuario WHERE login='$login'");
    if(mysqli_num_rows($query)>0){
        echo "<script language='javascript' type='text/javascript'>
        alert('Usuário já existe na base de dados!');
        window.location.href='cadusuario.php'
        </script>";
        exit();
    }
    else {
    $sql= "INSERT INTO cliente(nome,email) VALUES ('$nome','$email')";
    if(mysqli_query($conn,$sql)){
        $ultimo = mysqli_query($conn,"SELECT MAX(id) AS maior FROM cliente");
        $row = mysqli_fetch_array($ultimo); 
        $maior = $row['maior'];
        $usuario = mysqli_query($conn,"INSERT INTO usuario(id_cliente,login,senha,tipo) VALUES ('$maior','$login','$cripto','normal')");
        echo "<script language='javascript' type='text/javascript'> 
          alert('Registro inserido com sucesso!');
          window.location.href='cadusuario.php';
          </script>";
    }
    else {
        echo "<script language='javascript' type='text/javascript'> 
          alert('Não foi possível inserir este registro!');
          window.location.href='cadusuario.php'
          </script>";
    }
}
    mysqli_close($conn);
?>