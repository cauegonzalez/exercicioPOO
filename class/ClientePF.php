<?php
include_once "/class/ClienteInterface.php";

class ClientePF extends \Cliente implements \ClienteInterface
{
    public $cpf;
    public $dataNascimento;

    /**
     *
     * @return string
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     *
     * @param string $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
        return $this;
    }

    /**
     *
     * @return date
     */
    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }

    /**
     *
     * @param date $dataNascimento
     */
    public function setDataNascimento($dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;
        return $this;
    }

    /**
     * {@inheritDoc}
     * @see ClienteInterface::classificar()
     */
    public function classificar($classificacao)
    {

        if ($classificacao > 5)
        {
            $classificacao = 5;
        }
        $this->classificacao = $classificacao;
    }

}