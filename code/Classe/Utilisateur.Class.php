<?php

class Utilisateur
{
    private $mail;
    private $type;
    private $profile;
    private $nom;
    private $prenom;
    private $promotion;
    private $pwd;

    //method
    /**
     * @param $mail
     * @param $type
     * @param $profile
     * @param $nom
     * @param $prenom
     * @param $promotion
     * @param $pwd
     */

    public function __construct($mail, $type, $profile, $nom, $prenom, $promotion, $pwd)
    {
        $this->mail = $mail;
        $this->type = $type;
        $this->profile= $profile;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->promotion= $promotion;
        $this->pwd = $pwd;
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
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return mixed
     */
    public function getProfile()
    {
        return $this->profile;
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
    public function getPromotion()
    {
        return $this->promotion;
    }

    /**
     * @return mixed
     */
    public function getPwd()
    {
        return $this->pwd;
    }
}

