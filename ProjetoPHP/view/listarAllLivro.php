<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/listAll.css">
    <title>Catálogo de Livros</title>
    
</head>
<body>
    <?php
        require_once '../dao/livroDAO.php';
        $livroDAO = new livroDAO();
        $livros = $livroDAO->getAllLivro();
    ?>

    <div class="container">

        <a href="../index.php">Página Inicial</a>
        
        <h4>Catálogo de Livros</h4>

        <table border="1">
            <tr>
                <td>ID</td>
                <td>Título</td>
                <td>Autor</td>
                <td>Ano</td>
            
            </tr>

            <?php
            // TABELA DINÂMICA
                foreach ($livros as $livro) {
                echo "<tr>";

                echo "<td>{$livro['id_livro']}</td>";
                echo "<td>{$livro['titulo']}</td>";
                echo "<td>{$livro['autor']}</td>";
                echo "<td>{$livro['ano']}</td>";
                
                echo "</tr>";
                }
            ?>
        </table>

    </div>
    
    

</body>
</html>