# MVC ⋆｡°✩
> MVC é um padrão de arquitetura usado para organizar o código, de forma clara, separando a lógica em 3 partes.<br>

#

### ATIVIDADES REALIZADAS:

#### 1. Lista de Alunos
```
    private $alunos = [
        ['nome' => 'Fany', 'idade' => 17],
        ['nome' => 'Isa', 'idade' => 18],
        ['nome' => 'Lana', 'idade' => 18]
    ];

    public function listarAlunos(){
        return $this->alunos;
    }
}
```
>Para fazer utilizei conceitos de View e Controller
###### RESULTADO:
<img width="250" alt="image" src="https://github.com/user-attachments/assets/934294ad-83de-4bb5-b2b0-a003304fda7d" />

#

#### 2. Desafio
```
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
```
>Para fazer utilizei conceitos de View e Controller
###### RESULTADO:
<img width="350" alt="image" src="https://github.com/user-attachments/assets/e07087e9-6d29-4563-8181-151c290324de" />



 
