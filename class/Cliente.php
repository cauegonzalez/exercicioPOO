<?php

/**
 * Classe criada durante o curso POO da code.education
 * 03/04/2016
 *
 * @author cauegonzalez
 */
class Cliente
{
    public $nome;
    public $endereco;
    public $classificacao;

    /**
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     *
     * @param string $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     *
     * @param string $endereco
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
        return $this;
    }

    /**
     *
     * @return integer
     */
    public function getClassificacao()
    {
        return $this->classificacao;
    }


}