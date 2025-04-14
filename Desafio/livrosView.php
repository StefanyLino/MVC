<?php

function exibirLivros($livros){
    echo "<h2>Lista de Livros:</h2> <ul>";

    foreach ($livros as $livro){
        echo "<li>{$livro['titulo']} - {$livro['autor']} - {$livro['ano']}  </li>";
    }

    echo "</ul>";
}
?>
