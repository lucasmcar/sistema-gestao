<?php

namespace App\Model;

class Funcionario
{
    private $idFuncionario;
    private $nome;
    private $dataEntrada;
    private $salario;
    private $funcao;

    public function __construct()
    {

    }

    /**
     * @return mixed
     */
    public function getIdFuncionario()
    {
        return $this->idFuncionario;
    }

    /**
     * @param mixed $idFuncionario
     */
    public function setIdFuncionario($idFuncionario): void
    {
        $this->idFuncionario = $idFuncionario;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome): void
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getDataEntrada()
    {
        return $this->dataEntrada;
    }

    /**
     * @param mixed $dataEntrada
     */
    public function setDataEntrada($dataEntrada): void
    {
        $this->dataEntrada = $dataEntrada;
    }

    /**
     * @return mixed
     */
    public function getSalario()
    {
        return $this->salario;
    }

    /**
     * @param mixed $salario
     */
    public function setSalario($salario): void
    {
        $this->salario = $salario;
    }



    /**
     * @return Funcao
     */
    public function getFuncao()
    {
        return $this->funcao;
    }

    /**
     * @param Funcao $funcao
     */
    public function setFuncao($funcao): void
    {
        $this->funcao = $funcao;
    }


}