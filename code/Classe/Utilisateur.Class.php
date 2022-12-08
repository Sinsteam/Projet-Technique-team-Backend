<?php

class Utilisateur
{
    private $mail;
    private $pwd;
    private $nom;
    private $prenom;
    private $type;
    private $promotion;
    private $profil;

    /**
     * @param $mail
     * @param $pwd
     * @param $nom
     * @param $prenom
     * @param $type
     * @param $promotion
     * @param $profil
     */
    public function __construct($mail, $pwd, $nom, $prenom, $type, $promotion, $profil)
    {
        $this->mail = $mail;
        $this->pwd = $pwd;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->type = $type;
        $this->promotion = $promotion;
        $this->profil = $profil;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @return mixed
     */
    public function getPwd()
    {
        return $this->pwd;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return mixed
     */
    public function getPromotion()
    {
        return $this->promotion;
    }

    /**
     * @return mixed
     */
    public function getProfil()
    {
        return $this->profil;
    }


}
