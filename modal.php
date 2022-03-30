<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
    <center>
        <h2>Janela Modal</h2>
    </center>
    <hr />
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome do Produto</th>
                <th scope="col">Preço</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'conecta.php';
            $pesquisa = mysqli_query($conn, "SELECT * FROM produto");
            $row = mysqli_num_rows($pesquisa);
            if ($row > 0) {
                while ($registro = $pesquisa->fetch_array()) {
                    $id = $registro['id'];
                    echo '<tr>';
                    echo '<td>' . $registro['id'] . '</td>';
                    echo '<td>' . $registro['nomeproduto'] . '</td>';
                    echo '<td>' . $registro['preco'] . '</td>';
                    echo '<td><a href="" data-bs-toggle="modal" data-bs-target="#exampleModal'.$id.'"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="Red" class="bi bi-bug" viewBox="0 0 16 16">
                            <path d="M4.355.522a.5.5 0 0 1 .623.333l.291.956A4.979 4.979 0 0 1 8 1c1.007 0 1.946.298 2.731.811l.29-.956a.5.5 0 1 1 .957.29l-.41 1.352A4.985 4.985 0 0 1 13 6h.5a.5.5 0 0 0 .5-.5V5a.5.5 0 0 1 1 0v.5A1.5 1.5 0 0 1 13.5 7H13v1h1.5a.5.5 0 0 1 0 1H13v1h.5a1.5 1.5 0 0 1 1.5 1.5v.5a.5.5 0 1 1-1 0v-.5a.5.5 0 0 0-.5-.5H13a5 5 0 0 1-10 0h-.5a.5.5 0 0 0-.5.5v.5a.5.5 0 1 1-1 0v-.5A1.5 1.5 0 0 1 2.5 10H3V9H1.5a.5.5 0 0 1 0-1H3V7h-.5A1.5 1.5 0 0 1 1 5.5V5a.5.5 0 0 1 1 0v.5a.5.5 0 0 0 .5.5H3c0-1.364.547-2.601 1.432-3.503l-.41-1.352a.5.5 0 0 1 .333-.623zM4 7v4a4 4 0 0 0 3.5 3.97V7H4zm4.5 0v7.97A4 4 0 0 0 12 11V7H8.5zM12 6a3.989 3.989 0 0 0-1.334-2.982A3.983 3.983 0 0 0 8 2a3.983 3.983 0 0 0-2.667 1.018A3.989 3.989 0 0 0 4 6h8z"/>
                            </svg></a></td>';
                    echo '</tr>';
            ?>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal<?php echo $id;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"><?php echo $registro['nomeproduto'];?></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="cadentrega.php" method="POST">
                                        <label>ID</label>
                                        <br/>
                                        <input type="text" name="id" value="<?php echo $registro['id'];?>"/><br/>
                                        <label>Nome do produto</label>
                                        <br/>
                                        <input type="text" name="id" value="<?php echo $registro['nomeproduto'];?>"/><br/>
                                        <label>Teste1</label>
                                        <br/>
                                        <input type="text" name="teste1"/><br/>
                                        <label>Teste2</label>
                                        <br/>
                                        <input type="text" name="teste2"/><br/>
                                        <button type="submit" class="btn btn-outline-success">Gravar Entrega</button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                </div>
                            </div>
                        </div>
                    </div>

            <?php }
            } else {
                echo 'Não existem registros!!!';
                echo '</tbody>';
                echo '</table>';
            }
            ?>
        </tbody>
    </table>
</body>

</html>