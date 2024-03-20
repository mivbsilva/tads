<?php

require_once "Funcionario.php";
require_once "Departamento.php";
require_once "Pessoa.php";
require_once "./Financas/Conta.php";
require_once "./Seguranca/Conta.php";

//use Seguranca\Conta;
use Financas\Conta;

$func1 = new Funcionario(2000, 'Juquinha', 123);
$func2 = new Funcionario(2000, 'Mariazinha', 456);

$dep = new Departamento();

$dep->addFuncionario($func1);
$dep->addFuncionario($func2);

//var_dump($dep->getFuncionario(1));

//echo $dep->getFuncionario(1)->getSalario();

//$pessoa = new Pessoa(2000, "Juquinha");    <-------não poderá ser instanciada, pois agora é abstrata

//echo Departamento::INDETIFICADOR;
//echo Departamento::$quantidade;

//echo $func1->identidade;
//echo $func1->nome;
//echo $func1->matricula; //se mudar de private para public, funciona
//echo $func1->identidade; //depois das alterações no Funcionario, irá funcionar (linha 24 de Funcionario)
//echo $func1->identidade = 789;
//var_dump($func1);
//$func1->setIdentidade(789);
//echo $func1->identidade = 789;

$seguranca = new Conta();