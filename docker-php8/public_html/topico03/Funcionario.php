<?php

require_once("Pessoa.php");
require_once("Web.php");
class Funcionario extends Pessoa implements Web{

    private int $matricula;

    public function __construct(float $salario, string $nome, int $matricula){
        parent::__construct($salario, $nome);
        $this->matricula = $matricula;
    }

    public function __destruct(){ //chamado automaticamente quando o método já é destruído - pelo garbage colector
        echo "<br>Destruindo o objeto {$this->nome}";
    }

    public function getSalario():float{
        return $this->salario;
    }

    public function setSalario(float $valor){
        if($valor >= 1000){
            $this->salario = $valor;
        }
    }

    public function setNome(string $nome){
        $this->nome = $nome;
    }

    public function getNome(): string{
        return $this->nome;
    }

    function imprime(){
        echo "<p> {$this->nome}</p>";
    }

    function __get($nome){
        if($nome == "identidade"){
            return $this->matricula;
        }
    }

    function __set($nome, $valor){
        if($nome == "identidade"){
            $this->matricula = $valor;
        }
    }

    function __call($nome, $parametros){
        if($nome = "setIdentidade"){
            $this->matricula = $parametros[0];
        }
    }
}