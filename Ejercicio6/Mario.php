<?php

include("Personaje . php");
include("Salta . php");

class Mario extends Personaje implements Salta
{
    private string $habilidadEspecial;

    public function moverse($direccion)
    {
        if ($direccion == "izquierda") {
            echo "Mario se mueve hacia la " . $direccion;
        } else if ($direccion == "derecha") {
            echo "Mario se mueve hacia la " . $direccion;
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
        echo $this->class . "ha saltado";
    }

	public function __construct(string $habilidadEspecial) {

		$this->habilidadEspecial = $habilidadEspecial;
	}

	public function getHabilidadEspecial() : string {
		return $this->habilidadEspecial;
	}

	public function setHabilidadEspecial(string $value) {
		$this->habilidadEspecial = $value;
	}
}