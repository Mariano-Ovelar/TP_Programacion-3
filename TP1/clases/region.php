<?php
require_once __DIR__ . '/interface/claseInterface.php';
class region implements IInterfaz
{
    public $region;

    public function __construct($region)
    {
        $this->region = $region;
    }
    public function MostrarDatos()
    {
        echo "Region:" . $this->region;
    }
}