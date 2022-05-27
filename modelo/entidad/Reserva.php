<?php

class Reserva
{
    public $idreserva;
    public $idparqueadero;
    public $idusuario;
    public $nombreusuario;
    public $vehiculo;
    
    public function __construct($idreserva, $idparqueadero, $idusuario, $nombreusuario, $vehiculo) {
        $this->idreserva = $idreserva;
        $this->idparqueadero = $idparqueadero;
        $this->idusuario = $idusuario;
        $this->nombreusuario = $nombreusuario;
        $this->vehiculo = $vehiculo;
    }

    public function getIdreserva() {
        return $this->idreserva;
    }

    public function getIdparqueadero() {
        return $this->idparqueadero;
    }

    public function getIdusuario() {
        return $this->idusuario;
    }

    public function getNombreusuario() {
        return $this->nombreusuario;
    }

    public function getVehiculo() {
        return $this->vehiculo;
    }

    public function setIdreserva($idreserva): void {
        $this->idreserva = $idreserva;
    }

    public function setIdparqueadero($idparqueadero): void {
        $this->idparqueadero = $idparqueadero;
    }

    public function setIdusuario($idusuario): void {
        $this->idusuario = $idusuario;
    }

    public function setNombreusuario($nombreusuario): void {
        $this->nombreusuario = $nombreusuario;
    }

    public function setVehiculo($vehiculo): void {
        $this->vehiculo = $vehiculo;
    }    
}