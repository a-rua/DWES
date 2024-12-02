<?php

require_once __DIR__ . '/Vista.php';

class VArma extends Vista
{


    public function tablaArmas($armas)
    { ?>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Daño</th>
                    <th>Tipo</th>
                </tr>
            </thead>
            <tbody><?php
            foreach ($armas as $arma) { ?>
                    <tr>
                        <td><?php echo $arma["id"]; ?></td> 
                        <td><?php echo $arma["daño"]; ?></td>
                        <td><?php echo $arma["tipo"]; ?></td>
                        <td><a href='arma.php?id= <?php echo $arma["id"] ?> '>Ver</a> | <a
                                href='armaEdit.php?id= <?php echo $arma["id"] ?> '>Editar</a> | <a
                                href='armaDestroy.php?id= <?php echo $arma["id"] ?>'> Eliminar</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <?php
    }

    public function cabecera()
    { ?>
        <h1>Armas</h1>
        <a href="armaCreate.php">Crear arma</a>
        <?php
    }

    public function formArma()
    { ?>
        <form action="armaStore.php" method="post">
            <div>
                <label for="id">Id</label>
                <input type="text" id="id" name="id" required>
            </div>
            <div>
                <label for="daño">Daño</label>
                <input type="text" id="daño" name="daño" required>
            </div>
            <div>
                <label for="tipo">Tipo</label>
                <input type="text" id="tipo" name="tipo" required>
            </div>
            <button type="submit">Guardar</button>
        </form>
    <?php }

    public function formEditArma($arma): void
    { ?>
        <form action="armaUpdate.php" method="post">
            <div>
                <label for="tipo">Tipo</label>
                <input type="text" id="tipo" name="tipo" placeholder="Tipo" value=" <?php $arma["tipo"] ?> " required>
            </div>
            <div>
                <label for="id">Id</label>
                <input type="text" id="id" name="id" placeholder="Id" value=" <?php $arma["id"] ?> ">
            </div>
            <div>
                <label for="daño">Daño</label>
                <input type="text" id="daño" name="daño" placeholder="Daño" value=" <?php $arma["daño"] ?>  " required>
            </div>
            <button type="submit">Guardar</button>
        </form>
    <?php }

    public function verArma($arma)
    { ?>
        <div>
            
            <p>Tipo: ' <?= $arma["tipo"] ?> '</p>
            <p>Id: ' <?php echo $arma["id"] ?> '</p>
            <p>Daño: ' <?php echo $arma["daño"] ?> '</p>
        </div>
    <?php }
}

?>