<?php

class livroDTO{
    private $id_livro;
    private $titulo;
    private $autor;
    private $ano;

    
    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    
    public function getAutor()
    {
        return $this->autor;
    }
    
    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    
    public function getAno()
    {
        return $this->ano;
    }

    public function setAno($ano)
    {
        $this->ano = $ano;

        return $this;
    }

    /**
     * Get the value of id_livro
     */ 
    public function getId_livro()
    {
        return $this->id_livro;
    }

    /**
     * Set the value of id_livro
     *
     * @return  self
     */ 
    public function setId_livro($id_livro)
    {
        $this->id_livro = $id_livro;

        return $this;
    }
}

?>