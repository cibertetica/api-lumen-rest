<?php

//$router->get('/', function () use ($router) {
   // return $router->app->version();
//});

$router->get('/', function () {
    return view('index'); // página inicial
});

/* $router->get('', function() {
    return view(''); // adicionar lista
});

$router->get('', function() {
    return view(''); // remover lista
});

$router->get('', function() {
    return view(''); // exibir listas
});

$router->get('', function() {
    return view(''); // adicionar tarefa
});

$router->get('', function() {
    return view(''); // remover tarefa
});

$router->get('', function() {
    return view(''); // exibir tarefas vinculadas a lista
});

$router->get('', function() {
    return view(''); // marcar ou desmarcar tarefa
});

$router->get('', function() {
    return view(''); // mover tarefa para outra lista
});
*/

/*
* Rota temporária utilizada para gerar uma chave
*
$router->get('/key', function() {
    return str_random(32);
});
*
*/