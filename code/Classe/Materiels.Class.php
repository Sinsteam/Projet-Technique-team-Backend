<?php

class materiels
{
    private $type;
    private $quantite;

    //methode
    /**
     * @param $type
     * @param $quantite
     */

    public function __construct($type, $quantite)
    {
        $this->type = $type;
        $this->quantite= $quantite ;
    }
}