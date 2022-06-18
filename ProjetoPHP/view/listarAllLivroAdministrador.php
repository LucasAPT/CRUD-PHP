<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/listAllAdministrador.css">

    <title>Catálogo de Livros</title>
</head>
<body>
    <?php
        require_once '../dao/livroDAO.php';
        $livroDAO = new livroDAO();
        $livros = $livroDAO->getAllLivro();
    ?>

<div class="container">

<h4>Painel de Administrador</h4>
<table border="1">
    <tr>
        <td>ID</td>
        <td>Título</td>
        <td>Autor</td>
        <td>Ano</td>
        <td>Alterar</td>
        <td>Excluir</td>
    
    </tr>

    <?php
    // TABELA DINÂMICA
        foreach ($livros as $livro) {
           echo "<tr>";

           echo "<td>{$livro['id_livro']}</td>";
           echo "<td>{$livro['titulo']}</td>";
           echo "<td>{$livro['autor']}</td>";
           echo "<td>{$livro['ano']}</td>";
           echo "<td><a href = 'formAlterarLivro.php?id_livro={$livro['id_livro']}'>Alterar</a> </td>";
           echo "<td><a href = '../controller/excluirLivroController.php?id_livro={$livro['id_livro']}' onclick='return excluir()'>Excluir</a> </td>";
           
           echo "</tr>";
        }
    ?>
</table>
</div>
    
    <!-- JS PARA PERGUNTAR AO USUÁRIO SE QUER EXCLUIR -->
    <script>
        function excluir(){
            var ok = confirm ('Excluir cadastro?')
            if(ok){
                return true
            } else {
                return false
            }
        }
    </script>
</body>
</html>