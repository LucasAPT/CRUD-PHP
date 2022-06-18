<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/formLogin.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <!-- ENVIADO PARA loginController VIA post -->
        <form action="../controller/loginController.php" method="post">
            <h1>Paínel de Controle</h1>
            <label for="">Usuário</label>
            <input type="text" name="usuario" id="usuario" placeholder="Nome de Usuário">
            <label for="">Senha</label>
            <input type="password" name="senha" id="senha" placeholder="Senha do Usuário">
            
            <input type="submit" value="Login" id="submit">
        </form>
    </div>
    
</body>
</html>