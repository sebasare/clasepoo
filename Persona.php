<?php
 class Persona 
 {

    //atributos
    public $nombre;
    public $apelido;

    //constructor
    public function __construct(){
        $this->nombre="hola ";
    }

    // metodos
    public function saludar()
    {
        echo "hola como estas?";
    }
 }

?>