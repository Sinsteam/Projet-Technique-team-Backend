<?php

class machine
{
    private $idMachine;
    private $salle;
    private $disponibilite;

    //methode
    /**
     * @param $idMachine
     * @param $salle
     * @param $disponibilite
     */

    public function __construct($idMachine, $salle, $disponibilite)
    {
        $this->idMachine = $idMachine;
        $this->salle= $salle ;
        $this->disponibilite= $disponibilite ;
    }

    /**
     * @return mixed
     */
    public function getIdMachine()
    {
        return $this->idMachine;
    }

    /**
     * @return mixed
     */
    public function getSalle()
    {
        return $this->salle;
    }

    /**
     * @return mixed
     */
    public function getDisponibilite()
    {
        return $this->disponibilite;
    }
}