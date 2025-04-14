<?php
class Livro{

    private $livros = [
        ['titulo' => 'Jujutsu Kaisen', 'autor' => 'Gege Akutami', 'ano' => 2018],
        ['titulo' => 'The Disastrous Life of Saiki K.', 'autor' => 'Shuichi Aso', 'ano' => 2012],
        ['titulo' => 'My Hero Academia', 'autor' => 'Kohei Horikoshi', 'ano' => 2014],
        ['titulo' => 'Attack on Titan', 'autor' => 'Hajime Isayama', 'ano' => 2010],
        ['titulo' => 'Haikyu!!', 'autor' => 'Haruichi Furudate', 'ano' => 2014]
    ];

    public function listarLivros(){
        return $this->livros;
    }
}
?>