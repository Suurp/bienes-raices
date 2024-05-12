<?php

namespace Model;

class Propiedad extends ActiveRecord
{
    protected static $columnasDB = ['id', 'titulo', 'precio', 'imagen', 'descripcion', 'habitaciones', 'wc', 'estacionamiento', 'creado', 'vendedores_id'];
    protected static $tabla = 'propiedades';

    public $id;
    public $titulo;
    public $precio;
    public $imagen;
    public $descripcion;
    public $habitaciones;
    public $wc;
    public $estacionamiento;
    public $creado;
    public $vendedores_id;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? NULL;
        $this->titulo = $args['titulo'] ?? '';
        $this->precio = $args['precio'] ?? '';
        $this->imagen = $args['imagen'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->habitaciones = $args['habitaciones'] ?? '';
        $this->wc = $args['wc'] ?? '';
        $this->estacionamiento = $args['estacionamiento'] ?? '';
        $this->creado = date('Y/m/d');
        $this->vendedores_id = $args['vendedor_id'] ?? '';
    }

    public function validar()
    {
        if (!$this->titulo) {
            self::$errores[] = 'Debes añadir un titulo';
        }
        if (!$this->precio) {
            self::$errores[] = 'Debes añadir un precio';
        }
        if (!$this->imagen) {
            self::$errores[] = 'La imagen de la propiedad es obligatoria';
        }
        if (strlen($this->descripcion) < 50) {
            self::$errores[] = 'La descripción es obligatoria y debe tener al menos 50 caracteres';
        }
        if (!$this->habitaciones) {
            self::$errores[] = 'El numero de habitaciones es obligatorios';
        }
        if (!$this->wc) {
            self::$errores[] = 'El numero de baños es obligatorios';
        }
        if (!$this->estacionamiento) {
            self::$errores[] = 'El numero de lugares de estacionamiento es obligatorios';
        }
        if (!$this->vendedores_id) {
            self::$errores[] = 'Elige un vendedor';
        }

        return self::$errores;
    }
}
