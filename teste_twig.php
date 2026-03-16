<?php
// teste_twig.php
require('carregar_twig.php');

$nome = 'Fulaninho';
$displinas = [
    'Programação',
    'Banco de Dados',
    'Interface Web',
    'Desenvolvimento de Sistemas',
];


echo $twig->render('teste_twig.html', [
    'nome' => $nome,
    'legal' => true,
    'disciplinas' => $displinas,
]);