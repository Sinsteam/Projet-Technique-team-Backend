<?php

class Formation
{
    private $idMembreClub;
    private $intitule;
    private $nbrParticipantsInscrit;
    private $nbrParticipantMax;
    private $dateFormation;

    //methode
    /**
     * @param $idMembreClub
     * @param $intitule
     * @param $nbrParticipantsInscrit
     * @param $nbrParticipantMax
     * @param $dateFormation
     */

    public function __construct($idMembreClub, $intitule, $nbrParticipantsInscrit, $nbrParticipantMax, $dateFormation)
    {
        $this->idMembreClub = $idMembreClub;
        $this->intitule= $intitule ;
        $this->nbrParticipantsInscrit= $nbrParticipantsInscrit;
        $this->nbrParticipantMax = $nbrParticipantMax;
        $this->dateFormation= $dateFormation;
    }

    /**
     * @return mixed
     */
    public function getIdMembreClub()
    {
        return $this->idMembreClub;
    }

    /**
     * @param mixed $idMembreClub
     */
    public function setIdMembreClub($idMembreClub): void
    {
        $this->idMembreClub = $idMembreClub;
    }

    /**
     * @return mixed
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * @param mixed $intitule
     */
    public function setIntitule($intitule): void
    {
        $this->intitule = $intitule;
    }

    /**
     * @return mixed
     */
    public function getNbrParticipantsInscrit()
    {
        return $this->nbrParticipantsInscrit;
    }

    /**
     * @param mixed $nbrParticipantsInscrit
     */
    public function setNbrParticipantsInscrit($nbrParticipantsInscrit): void
    {
        $this->nbrParticipantsInscrit = $nbrParticipantsInscrit;
    }

    /**
     * @return mixed
     */
    public function getNbrParticipantMax()
    {
        return $this->nbrParticipantMax;
    }

    /**
     * @param mixed $nbrParticipantMax
     */
    public function setNbrParticipantMax($nbrParticipantMax): void
    {
        $this->nbrParticipantMax = $nbrParticipantMax;
    }

    /**
     * @return mixed
     */
    public function getDateFormation()
    {
        return $this->dateFormation;
    }

    /**
     * @param mixed $dateFormation
     */
    public function setDateFormation($dateFormation): void
    {
        $this->dateFormation = $dateFormation;
    }
}