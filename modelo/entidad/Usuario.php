<?php

class Usuario
{
    public $idusuario;
    public $nombre;
    public $correo;
    public $contrasena;
    
    public function __construct($idusuario, $nombre, $correo, $contrasena) {
        $this->idusuario = $idusuario;
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->contrasena = $contrasena;
    }

    public function getIdusuario() {
        return $this->idusuario;
    }


    public function getNombre() {
        return $this->nombre;
    }

    public function getCorreo() {
        return $this->correo;
    }

    public function getContrasena() {
        return $this->contrasena;
    }

    public function setIdusuario($idusuario): void {
        $this->idusuario = $idusuario;
    }


    public function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    public function setCorreo($correo): void {
        $this->correo = $correo;
    }

    public function setContrasena($contrasena): void {
        $this->contrasena = $contrasena;
    }
}