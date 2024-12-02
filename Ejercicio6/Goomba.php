<?php

include("Personaje . php");

class Goomba extends Personaje
{
    public int $velocidad;

    public function moverse($direccion)
    {
        if ($direccion == "izquierda") {
            echo "Goomba se mueve hacia la " . $direccion;
        } else if ($direccion == "derecha") {
            echo "Goomba se mueve hacia la " . $direccion;
        } else {
            echo "Direccion invalida";
        }
    }

    public function recibirDaño(int $dmg): int
    {
        return $dmg;
    }

    public function atacar()
    {

    }

	public function __construct(int $velocidad) {

		$this->velocidad = $velocidad;
	}

	public function getVelocidad() : int {
		return $this->velocidad;
	}

	public function setVelocidad(int $value) {
		$this->velocidad = $value;
	}
}