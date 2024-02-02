<?php

/**
 * Clase que representa un usuario.
 */
class User{

    /**
     * @var string  propiedad que almacena el nombre del usuario.
     */
    public $nombre;

    /**
     * @var int  propiedad que almacena la edad del usuario.
     */
    public $edad;

    /**
     * Constructor de la clase User.
     *
     * @param string $nombre El nombre del usuario.
     * @param int $edad La edad del usuario.
     */
    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    /**
     * Método que muestra el nombre del usuario.
     *
     * @return string El nombre del usuario.
     */
    public function obtenerNombre() {
        return $this->nombre;
    }

    /**
     * Método que muestra la edad del usuario.
     *
     * @return int La edad del usuario.
     */
    public function obtenerEdad() {
        return $this->edad;
    }

    /**
     * Método que imprime un saludo con el nombre del usuario.
     *
     * @return string Un saludo personalizado.
     */
    public function saludar() {
        return "¡Hola! Mi nombre es {$this->nombre}.";
    }

    /**
     * Método que incrementa la edad del usuario en un año.
     */
    public function envejecer() {
        $this->edad++;
    }

}