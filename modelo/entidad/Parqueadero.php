<?php

class Parqueadero
{
    public $idparqueadero;
    public $ubicacion;
    public $disponibilidad;
    
    public function __construct($idparqueadero, $ubicacion, $disponibilidad) {
        $this->idparqueadero = $idparqueadero;
        $this->ubicacion = $ubicacion;
        $this->disponibilidad = $disponibilidad;
    }
    
    public function getIdparqueadero() {
        return $this->idparqueadero;
    }

    public function getUbicacion() {
        return $this->ubicacion;
    }

    public function getDisponibilidad() {
        return $this->disponibilidad;
    }

    public function setIdparqueadero($idparqueadero): void {
        $this->idparqueadero = $idparqueadero;
    }

    public function setUbicacion($ubicacion): void {
        $this->ubicacion = $ubicacion;
    }

    public function setDisponibilidad($disponibilidad): void {
        $this->disponibilidad = $disponibilidad;
    }
}