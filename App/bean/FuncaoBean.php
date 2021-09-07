<?php

namespace App\bean;

use App\DAO\FuncaoDAO;

class FuncaoBean
{
    private $dao;

    public function __construct()
    {
        $this->dao = new FuncaoDAO();
    }

    /**
     * Insere funções no banco
     * @param $model
     * @return bool|\PDO
     */
    public function inserirFuncao($model)
    {
        return $this->dao->inserirFuncao($model);
    }

    /**
     * Recupera a função baseado no id passado por parâmetro
     * @param $model
     * @return mixed|void
     */
    public function recuperaFuncaoPorId($model)
    {
        return $this->dao->recuperaFuncaoPorId($model);
    }

    /**
     * Recupera todas funções
     * se receber true, orderanará a lista em ordem alfabética
     * @param false $orderBy
     * @return array|false|void
     */
    public function recuperaTodasFuncoes($orderBy = false)
    {
        return $this->dao->recuperaTodasFuncoes($orderBy);
    }

    public function recuperaTotalFuncoes()
    {
        return $this->dao->recuperaTotalFuncoes();
    }

}