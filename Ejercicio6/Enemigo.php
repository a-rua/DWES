<?php

include(Personaje . php);

abstract class Enemigo extends Personaje
{
    private int $poder;

    abstract public function moverse($direccion);

    abstract public function atacar(): int;

	public function __construct(int $poder) {

		$this->poder = $poder;
	}

	public function getPoder() : int {
		return $this->poder;
	}

	public function setPoder(int $value) {
		$this->poder = $value;
	}
}