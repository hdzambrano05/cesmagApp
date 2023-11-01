<?php
include 'index.php';
include 'conexion.php';
?>


<div class="container">
    <br>
<!-- Default form subscription -->
<form class="text-center border border-light p-5" action="#!">

<p class="h4 mb-4">Registro de facultdades</p>

<p>Ingresa la factultad que desea añadir</p>

<input type="text" id="codigoFac" name="codigoFac" class="form-control mb-4" placeholder="Codigo">


<input type="text" id="nombreFac" name="nombreFac" class="form-control mb-4" placeholder="Nombre">


<button class="btn btn-info btn-block" type="submit">Añadir</button>


</form>

</div>