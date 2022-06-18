<?php
require_once '../dto/livroDTO.php';
require_once '../dao/livroDAO.php';

$id_livro = $_POST['id_livro'];
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$ano = $_POST['ano'];

$livroDTO = new livroDTO();
$livroDTO->setId_livro($id_livro);
$livroDTO->setTitulo($titulo);
$livroDTO->setAutor($autor);
$livroDTO->setAno($ano);

$livroDAO = new livroDAO();
$ok = $livroDAO->cadastrarLivro($livroDTO);   

// MENSAGEM AO USUÁRIO
if ($ok){
    echo "<script>alert('Cadastrado com sucesso.')
        window.location = '../view/listarAllLivro.php'
    </script>";
}


?>