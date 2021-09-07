<?php

namespace App\DAO;

use App\database\connection\Connection;
use App\Model\Servico;

class ServicoDAO
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
    public function inserirFuncao(Servico $servico)
    {
        try{
            $sql = "INSERT INTO servico (servico, codigo) VALUES (':servico', ':codigo')";
            $this->con = Connection::getConnection();
            $stmt = $this->con->prepare($sql);
            $stmt->bindValue(':servico', $servico->getServico());
            return $stmt->execute();
        } catch (PDOException $ex ) {
            $ex->getMessage();
        }
    }
}