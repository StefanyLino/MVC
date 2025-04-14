<?php
// Defina uma classe chamada Aluno

class Aluno{
    // Criar uma propriedade privada (encapsulamento) chamada $alunos.
    // Essa propriedade é um array que armazena dados e alunos.
    // Cada aluno é reprensentado por um array associativo com nome e idade.

    // [] é um array

    private $alunos = [
        ['nome' => 'Fany', 'idade' => 17],
        ['nome' => 'Isa', 'idade' => 18],
        ['nome' => 'Lana', 'idade' => 18]
    ];

    // Define um método público chamado listarAlunos
    // Esse método serve para "retornar" o conteúdo do array $alunos

    public function listarAlunos(){
        return $this->alunos;
    }
}
?>