<h1>Crear nueva categoría</h1>

<form action="<?=base_url?>categoria/save" method="post">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" required>

    <input type="submit" value="Guardar">


</form>