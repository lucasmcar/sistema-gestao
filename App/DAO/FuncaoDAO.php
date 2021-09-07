<?php

namespace App\DAO;

use App\Model\Funcao;
use App\database\connection\Connection;

class FuncaoDAO
{ 
    protected $con;
    //protected $tabela = "FUNCAO";

    public function __construct()
    { }

    /**
     * Este método insere um registro na tabela de funções
     * Recebe um parametro que é do tipo funcão
     * @param Funcao $funcao
     * @return void
     */
    public function inserirFuncao(Funcao $funcao)
    {
        try{
            $sql = "INSERT INTO FUNCAO (funcao) VALUES (':funcao')";
            $this->con = Connection::getConnection();
            $stmt = $this->con->prepare($sql);
            $stmt->bindValue(':funcao', $funcao->getFuncao());
            return $stmt->execute();
        } catch (PDOException $ex ) {
            $ex->getMessage();
        }
    }

    /**
     * Recupera a função baseado no id passado por parâmetro
     * @param Funcao $funcao
     * @return mixed|void
     */
    public function recuperaFuncaoPorId(Funcao $funcao)
    {
        try{
            $sql = "SELECT funcao FROM FUNCAO WHERE id_funcao = :idfuncao";
            $this->con = Connection::getConnection();
            $stmt = $this->con->prepare($sql);
            $stmt->bindValue(':idFuncao', $funcao->getIdFuncao());
            $stmt->execute();
            return $stmt->fetch();
        } catch( \PDOException $ex ){
            $ex->getMessage();
        }
    }

    /**
     * Método recupera todas as funções da lista
     * Por padrão recebe falso, mas se receber true, orderanará a lista por
     * ordem alfabética
     * @param false $orderBy
     * @return array|false|void
     */
    public function recuperaTodasFuncoes(bool $orderBy = false)
    {
        try{
            if($orderBy) {
                $sql = "SELECT * FROM FUNCAO ORDER BY funcao";
                $this->con = Connection::getConnection();
                $stmt = $this->con->prepare($sql);
                $stmt->execute();
            } else {
                $sql = "SELECT * FROM FUNCAO";
                $this->con = Connection::getConnection();
                $stmt = $this->con->prepare($sql);
                $stmt->execute();
            }
            return $stmt->fetchAll();
        } catch( \PDOException $ex ){
            $ex->getMessage();
        }
    }

    public function recuperaTotalFuncoes()
    {
        $sql = "SELECT count(*) FROM FUNCAO";
        $this->con = Connection::getConnection();
        $stmt = $this->con->prepare($sql);
        $stmt->execute();
        $total = $stmt->fetch();
        return $total[0];

    }
}