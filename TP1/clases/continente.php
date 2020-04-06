<?php

require_once __DIR__ . '/region.php';

class continente extends region implements IInterfaz
{
    public $continente;

    public function __construct($region, $continente)
    {
        parent::__construct($region);
        $this->continente = $continente;
    }

    public function MostrarDatos()
    {
        parent::MostrarDatos();
        echo "Continente:" . $this->continente;
    }
}

