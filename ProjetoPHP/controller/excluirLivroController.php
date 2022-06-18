<?php
require_once '../dao/livroDAO.php';

// RECUPERANDO ID
$id_livro = $_GET['id_livro'];

$livroDAO = new livroDAO();
$livroDAO->excluirLivro($id_livro);

header("Location: ../view/listarAllLivro.php");
?>