<?php 
require_once 'conexao/conexao.php';
// EXECUTA O LOGIN
class loginDAO{
    function login($usuario, $senha){
        // BANCO DE DADOS
        $banco = new Conexao();
        $conexao = $banco->getConexao();

        $sql = $conexao->query("select u.user, u.pass, p.nome from usuario u join perfil p 
        on u.perfil_idperfil = p.idperfil
        where u.user = '$usuario' and u.pass = '$senha';");

        // ASSOCIA 
        $assoc = $sql->fetch_assoc();
        return $assoc;
        
        if(!$assoc){
            echo $conexao->error;
        } 
    }
}

?>