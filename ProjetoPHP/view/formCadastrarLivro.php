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
            <form action="../controller/cadastrarLivroController.php" method="post">
                <h1>Cadastro de Livros</h1>
                <label for="">Título</label>
                <input type="text" name="titulo" id="titulo" placeholder="Nome do Livro">
                <label for="">Autor</label>
                <input type="text" name="autor" id="autor" placeholder="Autor do Livro">
                <label for="">Ano</label>
                <input type="number" min ="1500" max="2099" name="ano" id="ano" placeholder="Ano de Publicação">
                
                <input type="submit" value="Cadastrar" id="submit">
            </form>

        </div>
    </main>
    
</body>
</html>