<?php
// Incluir o arquivo 'aluno.php' que contém a classe Aluno.
// Incluir o alunosView.php, que contém a função exibirAlunos().


require_once 'aluno.php';
require_once 'alunoview.php';

// Declarãção da classe alunoController.
// Essa classe é responsável pela comunicação entre o aluno.php(Model) e o alunosView.php(View)

class alunoController{
    private $model;

    // Criar um método constructor da classe, ele é chamado automaticamente quando um objeto foi criado.
    public function __construct()
    {
        // Criar uma nova instância da classe Aluno, e armazenar na propriedade $model
        $this->model= new Aluno();
    }

    // Método público chamado listar
    // Serve para buscar a lista de alunos e passar para o view.

    public function listar(){

        // Chama o método listarAlunos() do modelo e armazena na variável $alunos
        $alunos = $this->model->listarAlunos();

        // Chama a função exibir alunos e envia a lista para mostrar no navegador.
        exibirAlunos($alunos);
    }
}

// Execução do código
// Fora da classe é criado um objeto do tipo AlunoController;

$controler = new alunoController();

// Após criar o objeto, é chamado o método listar();
$controler->listar();
?>