<?php 

namespace App\Model;

class Servico
{
    private $idServico;
    private $servico;
    private $codigo;
    private $dataEntrada;
    private $dataSaida;
    private $valor;
    private $tiposServico;

    public function __construct()
    {
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
    public function getDataSaida()
    {
        return $this->dataSaida;
    }

    /**
     * @param mixed $dataSaida
     */
    public function setDataSaida($dataSaida): void
    {
        $this->dataSaida = $dataSaida;
    }

    /**
     * @return mixed
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * @param mixed $valor
     */
    public function setValor($valor): void
    {
        $this->valor = $valor;
    }

    /**
     * @return mixed
     */
    public function getTiposServico()
    {
        return $this->tiposServico;
    }

    /**
     * @param mixed $tiposServico
     */
    public function setTiposServico($tiposServico): void
    {
        $this->tiposServico = $tiposServico;
    }

    /**
     * @return mixed
     */
    public function getIdServico()
    {
        return $this->idServico;
    }

    /**
     * @param mixed $idServico
     */
    public function setIdServico($idServico): void
    {
        $this->idServico = $idServico;
    }

    /**
     * @return mixed
     */
    public function getServico()
    {
        return $this->servico;
    }

    /**
     * @param mixed $servico
     */
    public function setServico($servico): void
    {
        $this->servico = $servico;
    }

    /**
     * @return mixed
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * @param mixed $codigo
     */
    public function setCodigo($codigo): void
    {
        $this->codigo = $codigo;
    }


}
