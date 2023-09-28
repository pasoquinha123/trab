<?php

class aviao{
    // Primeiro defina as variáveis.
    public $modelo;
    public $Cmpaerea;
    public $cdp;
    public $velomax;
    public $autonomia;

//Função que vai executar ao ser instanciado o objeto
    public function __construct(string $modelo, string $Cmpaerea, string $cdp, string $velomax, string $autonomia,){
        $this->definirModelo($modelo);
        $this->definirCmpaerea($Cmpaerea);
        $this->definirCdp($cdp);
        $this->definirVelomax(velomax);
        $this->definirAutonomia($autonomia);
    }
    //Funções de operações dos objetos
    public function definirModelo(string $modelo){
        $this->modelo = $modelo;
    }

    public function definirCmpaerea(string $Cmpaerea){
        $this->Cmpaerea = $Cmpaerea;
    }

    public function definirCdp(string $cdp){
        $this->cdp = $cdp;
    }

    public function definirVelomax(string $velomax){
        $this->velomax = $velomax;
    }

    public function definirAutonomia(string $autonomia){
        $this->autonomia = $autonomia;
    }

    public function exibirModelo(){
        return $this->modelo;
    }

    public function exibirCmpaerea(){
        return $this->cmpaerea;
    }

    public function exibirCdp(){
        return $this->cdp;
    }

    public function exibirVelomax(){
        return $this->definirVelomax;
    }

    public function exibirAutonomia(){
        return $this->autonomia;
    }
}
?>