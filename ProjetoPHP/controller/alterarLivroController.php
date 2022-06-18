<?php
require_once '../dto/livroDTO.php';
require_once '../dao/livroDAO.php';

// RECUPERANDO DADOS
$id_livro = $_POST['id_livro'];
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$ano = $_POST['ano'];

// ENVIAR PARA OS SET E GET
$livroDTO = new livroDTO();
$livroDTO->setId_livro($id_livro);
$livroDTO->setTitulo($titulo);
$livroDTO->setAutor($autor);
$livroDTO->setAno($ano);

$livroDAO = new livroDAO();
$ok = $livroDAO->alterarLivro($livroDTO);

if ($ok) {
    echo "<script> alert ('Alterado com sucesso.') 
                window.location = '../view/listarAllLivro.php'
          </script>";
        
} else {
    echo "Não deu certo.";
}


?>