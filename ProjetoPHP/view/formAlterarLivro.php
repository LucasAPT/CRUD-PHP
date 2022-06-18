<?php
require_once '../dao/livroDAO.php';
// RECUPERA O ID 
$id_livro = $_GET['id_livro'];

$livroDAO = new livroDAO();
$livro = $livroDAO->getLivroById_Livro($id_livro);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/formCadastrar.css">
    <title>CRUD</title>
</head>
    <header></header>
<body>

    <main>
        <div class="container">
            <form action="../controller/alterarLivroController.php" method="post">
                <h1>Cadastro de Livros</h1>
                
                <label for="">ID</label>
                <input type="number" name="id_livro" id="titulo" placeholder="ID do Livro" value="<?php echo $livro['id_livro'] ?>">
                
                <label for="">Título</label>
                <input type="text" name="titulo" id="titulo" placeholder="Nome do Livro" value="<?php echo $livro['titulo'] ?>">
                <label for="">Autor</label>
                <input type="text" name="autor" id="autor" placeholder="Autor do Livro" value="<?php echo $livro['autor'] ?>">
                <label for="">Ano</label>
                <input type="number" min ="1500" max="2099" name="ano" id="ano" placeholder="Ano de Publicação" value="<?php echo $livro['ano'] ?>">
                <!-- TEM UMA TAG DE PHP DENTRO DOS INPUT QUE RECUPERA OS DADOS -->
                <input type="submit" value="Cadastrar" id="submit">
            </form>

        </div>
    </main>
    
</body>
</html>