<?php

class Sucursal {
    public $nombre;
    public $direccion;
    public $localidad;

    public function getDatos(){
        return
            'Nombre: ' . $this->nombre . '<br>' .
            'Dirección: ' . $this->direccion . '<br>' .
            'Localidad: ' . $this->localidad . '<hr>';
    }
}