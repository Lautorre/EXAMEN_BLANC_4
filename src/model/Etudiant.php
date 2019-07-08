<?php

// Nouveau modèle
class Etudiant extends Db {

    const TABLE_NAME = "etudiants";

    protected $id;
    protected $nom;
    protected $mail;



    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setNom($nom) {
        $this->nom = $nom;
        return $this;
    }

    public function setMail($mail) {
        $this->mail = $mail;
        return $this;
    }

    public function getId() {
        return $this->id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getMail() {
        return $this->mail;

    }

    public function save()
    {
        $data = [
            "id"        => $this->getId(),
            "nom"       => $this->getNom(),
            "mail"     => $this->getMail(),
        ];
        //if ($this->id > 0) return $this->update();
        $nouvelId = Db::dbCreate(self::TABLE_NAME, $data);
        $this->setId($nouvelId);
        return $this;
    }

    public static function findAll() {
        $data = Db::dbFind(self::TABLE_NAME);
        return $data;
    }
}