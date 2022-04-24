<?php

class Cliente {
    public $nombre;
    public $apellido;

    public function getNombreCompleto(){
        return $this->nombre . ' ' . $this->apellido . '<hr>';
    }
}