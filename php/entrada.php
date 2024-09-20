<?php

namespace Projeto\ProjetoEstacionamento\PHP;
use Projeto\ProjetoEstacionamento\PHP\entrada;

    class entrada {
            private string $codigo;
            private string $dtEntrada;
            private string $dtSaida;
            private string $hrEntrada;
            private string $hrSaida;
            private string $veiculo;


    public function __construct(
                        string $codigo,
                        string $dtEntrada,
                        string $dtSaida,
                        string $hrEntrada,
                        string $hrSaida,
                        string $veiculo)

    {
        $this->codigo = $codigo;
        $this->dtEntrada = $dtEntrada;
        $this->dtSaida = $dtSaida;
        $this->hrEntrada = $hrEntrada;
        $this->hrSaida = $hrSaida;
        $this->veiculo = $veiculo;
    }

    public function getcodigo():string
    {
        return $this->codigo;

    }//fim do método get

    
    public function setcodigo (string $codigo):void
    {
        $this->codigo = $codigo;

    }//fim do método set


    public function getdtEntrada():string
    {
        return $this->dtEntrada;

    }//fim do método get

    
    public function setdtEntrada (string $dtEntrada):void
    {
        $this->dtEntrada = $dtEntrada;

    }//fim do método set

    
    public function getdtSaida():string
    {
        return $this->dtSaida;

    }//fim do método get

    
    public function setdtSaida (string $dtSaida):void
    {
        $this->dtSainda = $dtSaida;

    }//fim do método set

    public function gethrEntrada():string
    {
        return $this->hrEntrada;

    }//fim do método get

    
    public function sethrEntrada (string $hrEntrada):void
    {
        $this->hrEntrada = $hrEntrada;

    }//fim do método set

    public function gethrSaida():string
    {
        return $this->hrSaida;

    }//fim do método get

    
    public function sethrSaida (string $hrSaida):void
    {
        $this->hrSaida = $hrSaida;

     }//fim do método set


    
    public function getveiculo():string
    {
        return $this->veiculo;

    }//fim do método get

    
    public function setveiculo (string $veiculo):void
    {
        $this->veiculo = $veiculo;

    }//fim do método set

    public function imprimir():string
    {
        return
        "<br><br>Código: " .$this->getcodigo().
        "<br>Data de entrada: " .$this->getdtEntrada().
        "<br>Data de Saída: " .$this->getdtSaida().
        "<br>Horario de Entrada:" .$this-> gethrEntrada().
        "<br>Horario de Saída:" .$this-> gethrSaida(). 
        "<br>Veiculo:" .$this->getveiculo();
    }
}

?>