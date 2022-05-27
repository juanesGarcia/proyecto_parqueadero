<?php

class Vehiculo
{
    public $idvehiculo;
    public $idreserva;
    public $placa;
    public $tipo;
    
    public function __construct($idvehiculo, $idreserva, $placa, $tipo) {
        $this->idvehiculo = $idvehiculo;
        $this->idreserva = $idreserva;
        $this->placa = $placa;
        $this->tipo = $tipo;
    }
    
    public function getIdvehiculo() {
        return $this->idvehiculo;
    }

    public function getIdreserva() {
        return $this->idreserva;
    }

    public function getPlaca() {
        return $this->placa;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setIdvehiculo($idvehiculo): void {
        $this->idvehiculo = $idvehiculo;
    }

    public function setIdreserva($idreserva): void {
        $this->idreserva = $idreserva;
    }

    public function setPlaca($placa): void {
        $this->placa = $placa;
    }

    public function setTipo($tipo): void {
        $this->tipo = $tipo;
    }
}