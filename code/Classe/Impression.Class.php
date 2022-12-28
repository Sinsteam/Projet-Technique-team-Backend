<?php

class Impression
{
//    private $etat;
    private $localisation_fichier;
    private $description_impression;
    private $date_debut;
    private $date_fin;
    private $date_souhaitee;
    private $mail_user;

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
        $this->localisation_fichier= $localisation_fichier;
        $this->description_impression= $description_inscription;
        $this->date_debut= $date_debut;
        $this->date_fin= $date_fin;
        $this->date_souhaitee=$date_souhaitee;
        $this->mail_user=$mail_user;
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
        return $this->localisation_fichier;
    }

    /**
     * @param mixed $localisation_fichier
     */
    public function setLocalisationFichier($localisation_fichier): void
    {
        $this->localisation_fichier = $localisation_fichier;
    }

    /**
     * @return mixed
     */
    public function getDescriptionImpression()
    {
        return $this->description_impression;
    }

    /**
     * @param mixed $description_impression
     */
    public function setDescriptionImpression($description_impression): void
    {
        $this->description_impression = $description_impression;
    }

    /**
     * @return mixed
     */
    public function getDateDebut()
    {
        return $this->date_debut;
    }

    /**
     * @param mixed $date_debut
     */
    public function setDateDebut($date_debut): void
    {
        $this->date_debut = $date_debut;
    }

    /**
     * @return mixed
     */
    public function getDateFin()
    {
        return $this->date_fin;
    }

    /**
     * @param mixed $date_fin
     */
    public function setDateFin($date_fin): void
    {
        $this->date_fin = $date_fin;
    }

    /**
     * @return mixed
     */
    public function getDateSouhaitee()
    {
        return $this->date_souhaitee;
    }

    /**
     * @param mixed $date_souhaitee
     */
    public function setDateSouhaitee($date_souhaitee): void
    {
        $this->date_souhaitee = $date_souhaitee;
    }

    /**
     * @return mixed
     */
    public function getMailUser()
    {
        return $this->mail_user;
    }

    /**
     * @param mixed $mail_user
     */
    public function setMailUser($mail_user): void
    {
        $this->mail_user = $mail_user;
    }


}
