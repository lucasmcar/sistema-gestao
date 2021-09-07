<?php

namespace App\Model;

class Funcao
{
    private $idFuncao;
    private $funcao;

    public function __construct()
    {

    }

    public function getIdFuncao()
    {
        return $this->idFuncao;
    }

    public function setIdFuncao($idFuncao)
    {
        $this->idFuncao = $idFuncao;
    }

    public function getFuncao()
    {
        return $this->funcao;
    }

    public function setFuncao($funcao)
    {
        $this->funcao = $funcao;
    }
}