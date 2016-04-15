<?php

use CFG\Cliente\Types\ClientePF;
use CFG\Cliente\Types\ClientePJ;

$arrayClientes = [];

$cliente = new ClientePF();
$classificacao = rand(1, 5);
$cliente->classificar($classificacao);
$cliente->setNome('João da Silva');
$cliente->setCpf('12345678901');
$cliente->setEndereco('Rua dos Bobos n. 0');
$dataNascimento = new DateTime("1985-12-01");
$cliente->setDataNascimento($dataNascimento->format("m/d/Y"));

$arrayClientes[] = $cliente;

$cliente = new ClientePF();
$classificacao = rand(1, 5);
$cliente->classificar($classificacao);
$cliente->setNome('José da Silva');
$cliente->setCpf('13354678901');
$cliente->setEndereco('Rua dos Bobos n. 10');
$dataNascimento = new DateTime("1985-10-11");
$cliente->setDataNascimento($dataNascimento->format("m/d/Y"));

$arrayClientes[] = $cliente;

$cliente = new ClientePF();
$classificacao = rand(1, 5);
$cliente->classificar($classificacao);
$cliente->setNome('Maria da Silva');
$cliente->setCpf('13354698702');
$cliente->setEndereco('Rua dos Bobos n. 20');
$dataNascimento = new DateTime("1989-06-21");
$cliente->setDataNascimento($dataNascimento->format("m/d/Y"));

$arrayClientes[] = $cliente;

$cliente = new ClientePF();
$classificacao = rand(1, 5);
$cliente->classificar($classificacao);
$cliente->setNome('Mariana da Silva Sauro');
$cliente->setCpf('13387234702');
$cliente->setEndereco('Rua dos Bobos n. 30');
$dataNascimento = new DateTime("1989-08-24");
$cliente->setDataNascimento($dataNascimento->format("m/d/Y"));

$arrayClientes[] = $cliente;

$cliente = new ClientePF();
$classificacao = rand(1, 5);
$cliente->classificar($classificacao);
$cliente->setNome('Luísa Gomes');
$cliente->setCpf('13354982302');
$cliente->setEndereco('Rua dos Bobos n. 40');
$dataNascimento = new DateTime("1980-02-28");
$cliente->setDataNascimento($dataNascimento->format("m/d/Y"));

$arrayClientes[] = $cliente;

$cliente = new ClientePF();
$classificacao = rand(1, 5);
$cliente->classificar($classificacao);
$cliente->setNome('Rodrigo Cardoso');
$cliente->setCpf('13354699873');
$cliente->setEndereco('Rua dos Bobos n. 50');
$dataNascimento = new DateTime("1982-09-19");
$cliente->setDataNascimento($dataNascimento->format("m/d/Y"));

$arrayClientes[] = $cliente;

$cliente = new ClientePF();
$classificacao = rand(1, 5);
$cliente->classificar($classificacao);
$cliente->setNome('Bruno de Souza');
$cliente->setCpf('13323467702');
$cliente->setEndereco('Rua dos Bobos n. 60');
$dataNascimento = new DateTime("1990-04-27");
$cliente->setDataNascimento($dataNascimento->format("m/d/Y"));

$arrayClientes[] = $cliente;

$cliente = new ClientePF();
$classificacao = rand(1, 5);
$cliente->classificar($classificacao);
$cliente->setNome('Cátia Moreira');
$cliente->setCpf('33546098742');
$cliente->setEndereco('Rua dos Bobos n. 70');
$dataNascimento = new DateTime("1989-06-21");
$cliente->setDataNascimento($dataNascimento->format("m/d/Y"));

$arrayClientes[] = $cliente;

$cliente = new ClientePF();
$classificacao = rand(1, 5);
$cliente->classificar($classificacao);
$cliente->setNome('Zélia Antunes');
$cliente->setCpf('98734698702');
$cliente->setEndereco('Rua dos Bobos n. 80');
$dataNascimento = new DateTime("1989-06-21");
$cliente->setDataNascimento($dataNascimento->format("m/d/Y"));

$arrayClientes[] = $cliente;

$cliente = new ClientePF();
$classificacao = rand(1, 5);
$cliente->classificar($classificacao);
$cliente->setNome('Arnaldo Soares');
$cliente->setCpf('98374693702');
$cliente->setEndereco('Rua dos Bobos n. 90');
$dataNascimento = new DateTime("1989-06-21");
$cliente->setDataNascimento($dataNascimento->format("m/d/Y"));

$arrayClientes[] = $cliente;

$cliente = new ClientePJ();
$classificacao = rand(1, 5);
$cliente->classificar($classificacao);
$cliente->setNome('Asdrubal Corp');
$cliente->setCnpj('32.415.542/0001-11');
$cliente->setEndereco('Av. dos Magnatas n. 171');
$cliente->setEnderecoCobranca('Rua dos Bobos n. 0');
$dataFundacao = new DateTime("2005-04-07");
$cliente->setDataFundacao($dataFundacao->format("m/d/Y"));

$arrayClientes[] = $cliente;

$cliente = new ClientePJ();
$classificacao = rand(1, 5);
$cliente->classificar($classificacao);
$cliente->setNome('Luthor Corp');
$cliente->setCnpj('76.743.185/0001-96');
$cliente->setEndereco('Av. dos Magnatas n. 589');
$cliente->setEnderecoCobranca('Rua dos Bobos n. 80');
$dataFundacao = new DateTime("1990-07-27");
$cliente->setDataFundacao($dataFundacao->format("m/d/Y"));

$arrayClientes[] = $cliente;

$cliente = new ClientePJ();
$classificacao = rand(1, 5);
$cliente->classificar($classificacao);
$cliente->setNome('Wayne Industries');
$cliente->setCnpj('65.215.960/0001-14');
$cliente->setEndereco('Av. dos Magnatas n. 999');
$cliente->setEnderecoCobranca('Rua dos Bobos n. 90. A/C Bruce Wayne');
$dataFundacao = new DateTime("1980-09-09");
$cliente->setDataFundacao($dataFundacao->format("m/d/Y"));

$arrayClientes[] = $cliente;

function ordenaClientes($ordem, $arrayClientes)
{
    if ($ordem == 'desc')
    {
        krsort($arrayClientes);
        return $arrayClientes;
    }
    ksort($arrayClientes);
    return $arrayClientes;
}

function detalheCliente($id, $arrayClientes)
{
    $arrayCliente[0] = $arrayClientes[$id];
    return $arrayCliente;
}