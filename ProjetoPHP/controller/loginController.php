<?php   
session_start();
require_once '../dao/loginDAO.php';

$usuario = isset($_POST['usuario'])? $_POST['usuario']: '' ;
$senha = $_POST['senha'];

$loginDAO = new loginDAO();
$login = $loginDAO->login($usuario,$senha);

// SE NÃO ESTIVER VAZIO ESTARÁ RECEBENDO O USUÁRIO
if(!empty($login)){

    $_SESSION['usuario'] = $login['user'];
    $_SESSION['perfil'] = $login['nome'];
    header("Location: ../administradorIndex.php ");

}else{
    echo "<script>alert('Falha no Login.') 
                 window.location = '../view/formLogin.php'
    </script>";
}


?>