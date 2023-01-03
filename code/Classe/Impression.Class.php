<?php

class Impression
{
//    private $etat;
    private $localisationFichier;
    private $descriptionImpression;
    private $dateDebut;
    private $dateFin;
    private $dateSouhaitee;
    private $mailUser;

    //methode
    /**
//     * @param $etat
     * @param $localisation_fichier
     * @param $description_impression
     * @param $date_debut
     * @param $date_fin
     * @param $date_souhaitee
     * @param $mail_user
     */

    public function __construct($localisation_fichier, $description_inscription, $date_debut, $date_fin, $date_souhaitee, $mail_user)
    {
//        $this->etat = $etat;
        $this->localisationFichier= $localisation_fichier;
        $this->descriptionImpression= $description_inscription;
        $this->dateDebut= $date_debut;
        $this->dateFin= $date_fin;
        $this->dateSouhaitee=$date_souhaitee;
        $this->mailUser=$mail_user;
    }

    /**
     * @return mixed
     */
    /*public function getEtat()
    {
        return $this->etat;
    }
*/
    /**
     * @param mixed $etat
     */
   /* public function setEtat($etat): void
    {
        $this->etat = $etat;
    }
   */
    /**
     * @return mixed
     */
    public function getLocalisationFichier()
    {
        return $this->localisationFichier;
    }

    /**
     * @param mixed $localisationFichier
     */
    public function setLocalisationFichier($localisationFichier): void
    {
        $this->localisationFichier = $localisationFichier;
    }

    /**
     * @return mixed
     */
    public function getDescriptionImpression()
    {
        return $this->descriptionImpression;
    }

    /**
     * @param mixed $descriptionImpression
     */
    public function setDescriptionImpression($descriptionImpression): void
    {
        $this->descriptionImpression = $descriptionImpression;
    }

    /**
     * @return mixed
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * @param mixed $dateDebut
     */
    public function setDateDebut($dateDebut): void
    {
        $this->dateDebut = $dateDebut;
    }

    /**
     * @return mixed
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * @param mixed $dateFin
     */
    public function setDateFin($dateFin): void
    {
        $this->dateFin = $dateFin;
    }

    /**
     * @return mixed
     */
    public function getDateSouhaitee()
    {
        return $this->dateSouhaitee;
    }

    /**
     * @param mixed $dateSouhaitee
     */
    public function setDateSouhaitee($dateSouhaitee): void
    {
        $this->dateSouhaitee = $dateSouhaitee;
    }

    /**
     * @return mixed
     */
    public function getMailUser()
    {
        return $this->mailUser;
    }

    /**
     * @param mixed $mailUser
     */
    public function setMailUser($mailUser): void
    {
        $this->mailUser = $mailUser;
    }


}
