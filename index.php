<?php 

require_once "src/Tecnico.php";
require_once "src/Didatico.php";
require_once "src/Programacao.php";

$livro3 = new Tecnico;
$livro4 = new Tecnico;

$programacao1 = new Programacao;
$programacao2 = new Programacao;

$didatico1 = new Didatico;
$didatico2 = new Didatico;

$livro3->setTitulo("Use a cabeça! Java");
$livro3->setAutor("por Bert Bates");
$livro3->setPaginas(496);
$livro3->setFormato(["digital"]);
$didatico1->setDisciplina("Programação");
$didatico1->setNivel(["médio"]);
$programacao1->setArea("Back-end");

$livro4->setTitulo("Use a cabeça! HTML e CSS");
$livro4->setAutor("por Eric Freeman");
$livro4->setPaginas(496);
$livro4->setFormato(["fisico"]);
$didatico2->setNivel(["médio"]);
$didatico2->setDisciplina("Estilização");
$programacao2->setArea("Front-end");

// exercício 1
$livro1 = new Tecnico;
$livro2 = new Tecnico;

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
        <li>
            <p>Nome: <?=$livro3->getTitulo()?> </p>
            <p><?=$livro3->getAutor()?></p>
            <p>Paginas: <?=$livro3->getPaginas()?></p>
            <p>Formato: <?=$livro3->getFormato()?></p>
            <p>Diciplina: <?=$didatico1->getDisciplina()?></p>
            <!-- <p>Nivel: < ?=$didatico1->getNivel()[1]? ></p> -->
            <p>Nível: 
            <?php 
            foreach($didatico1->getNivel() as $nivel){
                echo $nivel."";
            }
            ?></p>
            <p>Área: <?=$programacao1->getArea()?></p>
        </li>
        <li>
            <p>Nome: <?=$livro4->getTitulo()?> </p>
            <p><?=$livro4->getAutor()?></p>
            <p>Paginas: <?=$livro4->getPaginas()?></p>
            <p>Formato: <?=$livro4->getFormato()?></p>
            <p>Diciplina: <?=$didatico2->getDisciplina()?></p>
            <!-- <p>Nivel: < ?=$didatico2->getNivel()[1]? ></p> -->
            <p>Nível: 
            <?php 
            foreach($didatico2->getNivel() as $nivel){
                echo $nivel."";
            }
            ?></p>
            <p>Área: <?=$programacao2->getArea()?></p>
        </li>
    </ul>
</body>
</html>