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
$poema = 'Se tu me amas, ama-me baixinho
    Não o grites de cima dos telhados
    Deixa em paz os passarinhos
    Deixa em paz a mim!
    Se me queres,
    enfim,
    tem de ser bem devagarinho, Amada,
    que a vida é breve, e o amor mais breve ainda...';

echo $twig->render('teste_twig.html', [
    'nome' => $nome,
    'legal' => true,
    'disciplinas' => $displinas,
    'poema' => $poema,
]);