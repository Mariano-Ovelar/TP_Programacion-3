<?php
require_once '../composer/vendor/autoload.php';
use NNV\RestCountries;

require_once __DIR__ . '/continente.php';

class paises extends continente implements IInterfaz
{
    public $pais;
    
    public function __construct($region, $continente, $pais)
    {
        parent::__construct($region, $continente);
        $this->pais = $pais;
    }

    public function FiltrarPorRegion($region)
    {
         return $this->paises->byRegion($region);
    }

    public function FiltrarPorIdioma($idioma)
    {
         return $this->paises->byLanguage($idioma);
    }

    public function MostrarDatos()
    {
        parent::MostrarDatos();
        echo "Pais:" . $this->pais;
    }
    
}
