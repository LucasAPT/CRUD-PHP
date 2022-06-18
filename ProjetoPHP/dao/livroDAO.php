<?php
require_once '../dao/conexao/conexao.php';

class livroDAO {
    // CADASTRAR
    function cadastrarLivro (livroDTO $livroDTO){

        $id_livro = $livroDTO->getId_livro();
        $titulo = $livroDTO->getTitulo();
        $autor = $livroDTO->getAutor();
        $ano = $livroDTO->getAno();
    
        // BANCO DE DADOS
        $banco = new mysqli('localhost', 'root', '', 'biblioteca');
        $sql = $banco->query("insert into livro values ('$id_livro', '$titulo', '$autor', '$ano')");
        
        // SE DER ERRO RETORNA O ERRO
        if (!$sql){
            $msg = $banco->error;
            echo $msg;
        }
        return $sql;
    }
    

    // LISTAR
    function getAllLivro(){
        $banco = new Conexao();
        $conexao = $banco->getConexao();
        $sql = $conexao->query("select * from livro");
        return $sql;
        
        // SE DER ERRO RETORNA O ERRO   
        if(!$sql) {
            $msg = $conexao->error;
            return $msg;
        }

    }

    // SELECIONANDO PELO IDENTIFICADOR CONFORME BANCO DE DADOS
    function getLivroById_Livro($id_livro){
        $banco = new Conexao();
        $conexao = $banco->getConexao();
        // COMANDO SQL
        $sql = $conexao->query("select * from livro where id_livro = '$id_livro'");
     
        $final = $sql->fetch_assoc();

        if(!$final) {
            $msg = $conexao->error;
            return $msg;
        } else {
            return $final;
        }
    }

    // ALTERAR
    // DADOS RECEBIDOS DE CONTROLLER
    function alterarLivro (livroDTO $livroDTO){
        $id_livro = $livroDTO->getId_livro();
        $titulo = $livroDTO->getTitulo();
        $autor = $livroDTO->getAutor();
        $ano = $livroDTO->getAno();

        $banco = new Conexao();
        $conexao = $banco->getConexao();
        // COMANDO SQL
        $sql = $conexao->query("update livro set titulo = '$titulo', autor = '$autor', ano = '$ano' where id_livro = '$id_livro' ");
    
        if(!$sql) {
            $msg = $conexao->error;
            return $msg;
        } else {
            return $sql;
        }
    }

    // EXCLUIR
    function excluirLivro($id_livro){
        $banco = new Conexao();
        $conexao = $banco->getConexao();
        // COMANDO SQL
        $sql = $conexao->query("delete from livro where id_livro = '$id_livro' ");
    
        if(!$sql) {
            $msg = $conexao->error;
            return $msg;
        } else {
            return $sql;
        }
    }
}

?>