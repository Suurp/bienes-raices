<fieldset>
    <legend>Informacion General</legend>

    <label>
        Titulo:
        <input type="text" name="propiedad[titulo]" placeholder="Titulo Propiedad" value="<?php echo s($propiedad->titulo); ?>" />
    </label>

    <label>
        Precio:
        <input type="number" name="propiedad[precio]" min="1" placeholder="Precio Propiedad" value="<?php echo s($propiedad->precio); ?>" />
    </label>

    <label>
        Imagen:
        <input type="file" accept="image/jpeg, image/png" name="propiedad[imagen]" />
    </label>
    <?php if ($propiedad->imagen) { ?>
        <img src="/imagenes/<?php echo $propiedad->imagen ?>" class="imagen-small">
    <?php }; ?>
    <label>
        Descripción:
        <textarea name="propiedad[descripcion]"><?php echo s($propiedad->descripcion); ?></textarea>
    </label>
</fieldset>

<fieldset>
    <legend>Información Propiedad</legend>

    <label>
        Habitaciones:
        <input type="number" name="propiedad[habitaciones]" placeholder="Ej: 3" min="1" max="9" value="<?php echo s($propiedad->habitaciones); ?>" />
    </label>

    <label>
        Baños:
        <input type="number" name="propiedad[wc]" placeholder="Ej: 3" min="1" max="9" value="<?php echo s($propiedad->wc); ?>" />
    </label>

    <label>
        Estacionamiento:
        <input type="number" name="propiedad[estacionamiento]" placeholder="Ej: 3" min="1" max="9" value="<?php echo s($propiedad->estacionamiento); ?>" />
    </label>
</fieldset>

<fieldset>
    <legend>Vendedor</legend>
    <label>Vendedor:
        <select name="propiedad[vendedor_id]" id="vendedor">
            <option value="" disabled selected>-- Seleccione --</option>
            <?php foreach ($vendedores as $vendedor) { ?>
                <option <?php echo $propiedad->vendedores_id === $vendedor->id ? 'selected' : ''; ?> value="<?php echo s($vendedor->id) ?>"> <?php echo s($vendedor->nombre) . " " . s($vendedor->apellido); ?> </option>
            <?php } ?>
    </label>

</fieldset>