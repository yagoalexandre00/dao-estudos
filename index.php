<?php

include_once("db.php");

?>

<!-- Forms simples para testagem do DAO -->
<h1>Insira um carro</h1>
<form action="process.php" method="POST">
    <div>
        <label for="brand">Marca do carro:</label>
        <input type="text" name="brand" placeholder="Insira a marca">
    </div>
    <div>
        <label for="km">Kilometragem:</label>
        <input type="text" name="km" placeholder="Insira a kilometragem">
    </div>
    <div>
        <label for="color">Cor:</label>
        <input type="text" name="cor" placeholder="Insira a cor">
    </div>
    <input type="submit" value="Salvar">
    <input type="submit" value="Mostrar">
</form>