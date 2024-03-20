<?php

abstract class Pessoa{
    protected float $salario;
    protected string $nome;

    abstract public function setSalario(float $salario);
    abstract public function getSalario(): float;
    abstract public function setNome(string $nome);
    abstract public function getNome(): string;

    public function __construct(float $salario, string $nome){
        $this->salario = $salario;
        $this->nome = $nome;
    }

    
    public function imprimeNome(){
        echo "<p> {$this->nome}</p>";
    }
}