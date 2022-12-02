<?php

class Utilisateur
{
    private $mail;
    private $pwd;
    private $nom;
    private $prenom;
    private $id;



    //method

    /**
     * @param $mail
     * @param $pwd
     * @param $nom
     * @param $prenom
     * @param $id
     */
    public function __construct($mail, $pwd, $nom, $prenom, $id)
    {
        $this->mail = $mail;
        $this->pwd = $pwd;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->id = $id;
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
    public function getId()
    {
        return $this->id;
    }



}
