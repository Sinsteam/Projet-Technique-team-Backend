<?php

class Utilisateur
{
    private $id_mail;
    private $type;
    private $profile;
    private $nom;
    private $prenom;
    private $promotion;
    private $pwd;



    //method

    /**
     * @param $id_mail
     * @param $type
     * @param $profile
     * @param $nom
     * @param $prenom
     * @param $promotion
     * @param $pwd
     */
    public function __construct($id_mail, $type, $profile, $nom, $prenom, $promotion, $pwd)
    {
        $this->id_mail = $id_mail;
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
    public function getid_mail()
    {
        return $this->id_mail;
    }

    /**
     * @return mixed
     */
    public function gettype()
    {
        return $this->type;
    }

    /**
     * @return mixed
     */
    public function getprofile()
    {
        return $this->profile;
    }

    /**
     * @return mixed
     */
    public function getnom()
    {
        return $this->nom;
    }

    /**
     * @return mixed
     */
    public function getprenom()
    {
        return $this->prenom;
    }

    /**
     * @return mixed
     */
    public function getpromotion()
    {
        return $this->promotion;
    }

    /**
     * @return mixed
     */
    public function getpwd()
    {
        return $this->pwd;
    }



}
