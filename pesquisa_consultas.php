<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>Pesquisar Medicos</title>
  </head>
  <body>

    <?php
        
        $pesquisa = $_POST['busca'] ?? '';

        include "conexao.php";

        $sql = "SELECT * FROM medicos WHERE nome LIKE '%$pesquisa%'";

        $dados = mysqli_query($conn, $sql);

        

    ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Pesquisar Médicos</h1>
                <nav class="navbar navbar-light bg-light">
                    <div class="container-fluid">
                        <form class="d-flex" action="pesquisa_medicos.php" method="POST">
                            <input class="form-control me-2" type="search" placeholder="Nome" aria-label="Search" name="busca" autofocus>
                            <button class="btn btn-outline-success btn-lg" type="submit">Pesquisar Medicos</button>
                        </form>
                    </div>
                </nav> 
                
                <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col">CRM</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Endereço</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Data de Nascimento</th>
                        <th scope="col">Funções</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                        while ($linha = mysqli_fetch_assoc($dados) ) {
                            $cod_pessoa = $linha['cod_pessoa'];
                            $crm = $linha['crm'];
                            $nome = $linha['nome'];
                            $endereco = $linha['endereco'];
                            $telefone = $linha['telefone'];
                            $email = $linha['email'];
                            $data_nascimento = $linha['data_nascimento'];
                            $data_nascimento = mostra_data($data_nascimento);

                            echo "<tr>
                                    <th scope='row'>$crm</th>
                                    <td>$nome</td>
                                    <td>$endereco</td>
                                    <td>$telefone</td>
                                    <td>$email</td>
                                    <td>$data_nascimento</td>
                                    <td>
                                    <a href='cadastro_edit_medicos.php?id=$cod_pessoa' class='btn btn-warning'>Editar</a>
                                    <a href='#' class='btn btn-danger'>Excluir</a>
                                    </td>                        
                                   </tr>";
                            
                            }
                       

                        ?>

                                              
                    </tbody>
                </table>

                <a href="index.php" class="btn btn-info">Voltar para o Início</a>
            </div>
        </div>
    </div>

    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>