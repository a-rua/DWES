<?php

abstract class Personaje
{
    private $nombre;
    private $puntosDeVida;
    private $fuerza;

    abstract protected function moverse(string $direccion);
    protected function recibirDaño(int $dmg): int
    {
        return $dmg;
    }

    abstract function atacar();

    public function __construct($nombre, $puntosDeVida, $fuerza)
    {

        $this->nombre = $nombre;
        $this->puntosDeVida = $puntosDeVida;
        $this->fuerza = $fuerza;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($value)
    {
        $this->nombre = $value;
    }

    public function getPuntosDeVida()
    {
        return $this->puntosDeVida;
    }

    public function setPuntosDeVida($value)
    {
        $this->puntosDeVida = $value;
    }

    public function getFuerza()
    {
        return $this->fuerza;
    }

    public function setFuerza($value)
    {
        $this->fuerza = $value;
    }
}
