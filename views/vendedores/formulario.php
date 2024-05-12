<fieldset>
    <legend>Informacion General</legend>

    <label>
        Nombre:
        <input type="text" name="vendedor[nombre]" placeholder="Nombre vendedor" value="<?php echo s($vendedor->nombre); ?>" />
    </label>

    <label>
        Apellido:
        <input type="text" name="vendedor[apellido]" placeholder="Apellido vendedor" value="<?php echo s($vendedor->apellido); ?>" />
    </label>
</fieldset>

<fieldset>
    <legend>Informacion Contacto</legend>

    <label>
        Teléfono:
        <input type="text" name="vendedor[telefono]" placeholder="Teléfono vendedor" value="<?php echo s($vendedor->telefono); ?>" />
    </label>

</fieldset>