<?php 
require_once "src/Livro.php";
$livro1 = new Livro;
$livro2 = new Livro;

$livro1->setTitulo("O Senhor dos Anéis: A Sociedade do Anel");
$livro1->setAutor("por J.R.R. Tolkien");
$livro1->setPaginas(576);

$livro2->setTitulo("Harry Potter e a Pedra Filosofal");
$livro2->setAutor("por J.K. Rowling");
$livro2->setPaginas(208);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livraria</title>
</head>
<body>
    <h1>Livraria Paçoca</h1>
    <hr>
    <h2>Livros disponíveis</h2>
    <ul>
        <li>
            <p>Nome: <?=$livro1->getTitulo()?> </p>
            <p><?=$livro1->getAutor()?></p>
            <p>Paginas: <?=$livro1->getPaginas()?></p>
        </li>
        <li>
            <p>Nome: <?=$livro2->getTitulo()?> </p>
            <p><?=$livro2->getAutor()?></p>
            <p>Paginas: <?=$livro2->getPaginas()?></p>
        </li>
    </ul>
</body>
</html>