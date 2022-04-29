<html>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
    <center>
        <h3>Gravando em duas Tabelas - TDS05</h3>
    </center>
    <hr />
    <br />
    <center><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Cadastrar Cliente
        </button></center>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                            <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
                        </svg>&nbsp;&nbsp;<b>Cadastro de Cliente</b></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form action="cadusuario2.php" method="POST">
                        <label class="form-label">Nome</label><br />
                        <input type="text" name="nome" class="form-control" placeholder="Digite o seu nome" required /><br />
                        <label class="form-label">E-mail</label><br />
                        <input type="email" name="email" class="form-control" placeholder="Digite o seu e-mail" required /><br />
                        <label class="form-label">Login</label><br />
                        <input type="text" name="login" class="form-control" placeholder="Digite o seu login" required /><br />
                        <label class="form-label">Senha</label><br />
                        <input type="password" name="senha" class="form-control" placeholder="Digite a sua senha" required /><br />
                        <button type="submit" class="btn btn-outline-secondary" name="btgravar">Gravar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br />
    <div class="row justify-content-center row-cols-1 row-cols-md-2 mb-3 text-center">
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">&nbsp;&nbsp;<b>Dados dos Clientes</b></h4>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include 'conecta.php';
                                $pesquisa = mysqli_query($conn, "SELECT * FROM cliente");
                                $row = mysqli_num_rows($pesquisa);
                                if($row > 0){
                                    while($registro = $pesquisa-> fetch_array()){
                                        echo '<tr>';
                                        echo '<td>' . $registro['nome'] . '</td>';
                                        echo '<td>' . $registro['email'] . '</td>';
                                        echo '<td>Editar | Excluir</td>';
                                        echo '</tr>';
                                    }
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>