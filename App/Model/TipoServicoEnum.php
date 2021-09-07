<?php

namespace App\Model;

class TipoServicoEnum
{
    /**
     * Tipos de serviços reaizados
     * Apenas a chapeação pode englobar todos os outros tipos
     */
    const CHAPEAÇAO     =  0;
    const PINTURA       =  1;
    const RETOQUE       =  2;
    const ESPELHAMENTO  =  3;
    const MONTAGEM      =  4;
    const POLIMENTO     =  5;
}