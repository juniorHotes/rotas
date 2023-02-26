<?php $this->layout("master") ?>

<h1>Contact</h1>

<form action="/contact" method="post">
    <input type="text" name="name" id="name" value="<?= $this->e($name) ?>">
    <input type="number" name="age" id="age" value="<?= $this->e($age) ?>">
    <input type="submit" value="Enviar">
</form>