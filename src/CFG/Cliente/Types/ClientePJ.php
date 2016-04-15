<?php

namespace CFG\Cliente\Types;

use CFG\Cliente\ClienteInterface;
use CFG\Cliente\ClientePJInterface;
use CFG\Cliente\Cliente;

class ClientePJ extends Cliente implements ClienteInterface, ClientePJInterface
{
    public $cnpj;
    public $dataFundacao;
    public $enderecoCobranca;

    /**
     *
     * @return string
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     *
     * @param string $cnpj
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
        return $this;
    }
    public function getDataFundacao()
    {
        return $this->dataFundacao;
    }
    public function setDataFundacao($dataFundacao)
    {
        $this->dataFundacao = $dataFundacao;
        return $this;
    }

    /**
     * Apenas para diferenciar da classificação de PF, quem for PJ ganha uma estrela a mais.
     * @see ClienteInterface::classificar()
     */
    public function classificar($classificacao)
    {
        //como classificação só aceita valores de 1 a 5, se o valor já for 5, não somar a estreja do PJ
        if ($classificacao < 5)
        {
            $classificacao += 1;
        }
        else
        {
            $classificacao = 5;
        }
        $this->classificacao = $classificacao;
    }

    public function setEnderecoCobranca($enderecoCobranca)
    {
        $this->enderecoCobranca = $enderecoCobranca;
        return $this;
    }

}