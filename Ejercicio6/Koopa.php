<?php

include("Enemigo . php");

class Koopa extends Enemigo
{
    private boolean $esCaparazonVerde;

    public function moverse($direccion)
    {
        if ($direccion == "izquierda") {
            echo "Koopa se mueve hacia la " . $direccion;
        } else if ($direccion == "derecha") {
            echo "Koopa se mueve hacia la " . $direccion;
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

	public function __construct(boolean $esCaparazonVerde) {

		$this->esCaparazonVerde = $esCaparazonVerde;
	}

	public function getEsCaparazonVerde() : boolean {
		return $this->esCaparazonVerde;
	}

	public function setEsCaparazonVerde(boolean $value) {
		$this->esCaparazonVerde = $value;
	}
}