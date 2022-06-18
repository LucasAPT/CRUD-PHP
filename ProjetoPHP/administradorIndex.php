<?php 
include 'login/validaLogin.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">    

    <title>Página Inicial</title>
</head>
<body>

<div class="container">
    <?php 
        // DESCRIÇÃO DO USUÁRIO
            echo "Usuario: " , $_SESSION['usuario'], "<br>";
            echo "Perfil: " , $_SESSION['perfil'], "<br>";

        ?>


        <a href="view/formCadastrarLivro.php">Cadastrar novo livro</a>
        <a href="view/listarAllLivroAdministrador.php">Listar livros cadastrados</a>
        <a href="controller/logoffController.php">Encerrar Sessão</a>

</div>
    
</body>
</html>