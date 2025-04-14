<?php

require_once 'livro.php';
require_once 'livrosView.php';

class livroController{
    private $model;

   public function __construct()
    {
        $this->model= new Livro();
    }

    public function listar(){

        $livros = $this->model->listarLivros();

        exibirLivros($livros);
    }
}

$controler = new livroController();

$controler->listar();
?>