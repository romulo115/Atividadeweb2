<?php
include('usuario.php');

$usuario01 = new usuario('nome','sobrenome');
$usuario01->setnome('nathan');
$usuario01->setsobrenome('havan');
$usuario01->ola();

$usuario02 = new usuario ('Johnny','Walker');
$usuario02->ola();

$usuarioRambo = new usuario ('Sylvester','Stallone');
$usuarioRambo->ola();

$usuarioJair = new usuario ('Jair', 'Bolsonaro');
$usuarioJair->ola()->registrar()->email();