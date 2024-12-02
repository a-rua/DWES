<?php

include("Personaje . php");
include("Salta . php");

class Luigi extends Personaje implements Salta
{
    private int $agilidad;

    public function moverse($direccion)
    {
        if ($direccion == "izquierda") {
            echo "Luigi se mueve hacia la " . $direccion;
        } else if ($direccion == "derecha") {
            echo "Luigi se mueve hacia la " . $direccion;
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

    public function saltar()
    {
        echo $this->class ."ha saltado muy alto";
    }

	public function __construct(int $agilidad) {

		$this->agilidad = $agilidad;
	}

	public function getAgilidad() : int {
		return $this->agilidad;
	}

	public function setAgilidad(int $value) {
		$this->agilidad = $value;
	}
}