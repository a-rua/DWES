<?php
namespace Modelo;
require_once 'Conexion.php';


class MArma extends Conexion
{
    public function getArma($id)
    {

        $arma = null;
        $sentencia = $this->getCon()->prepare("SELECT * FROM arma WHERE id = ?");

        $sentencia->bind_param("i", $id);

        $sentencia->execute();

        $resultado = $sentencia->get_result();

        if ($fila = $resultado->fetch_assoc()) {
            $arma = $fila;
        }

        $sentencia->close();

        return $arma;
    }

    public function getArmas()
    {
        $query = $this->getCon()->query('SELECT * FROM  arma');

        $armas = [];

        while ($fila = $query->fetch_assoc()) {
            $armas[] = $fila;
        }

        return $armas;
    }

    public function insertArma($arma)
    {
        $sentencia = $this->getCon()->prepare("INSERT INTO arma(id, daño, tipo) VALUES (?,?,?)");

        $sentencia->bind_param("iis", $arma["id"], $arma["daño"], $arma["tipo"]);

        $sentencia->execute();
        $sentencia->close();
    }

    public function eliminarArma($id)
    {
        $sentencia = $this->getCon()->prepare("DELETE FROM arma WHERE id = ?");

        $sentencia->bind_param("i", $id);

        $sentencia->execute();
        $sentencia->close();
    }

    public function modificarArma($arma)
    {
        $sentencia = $this->getCon()->prepare("UPDATE arma SET daño = ?, tipo = ? WHERE id = ?");

        $sentencia->bind_param("isi", $arma["daño"], $arma["tipo"], $arma["id"]);

        $sentencia->execute();
        $sentencia->close();
    }
}