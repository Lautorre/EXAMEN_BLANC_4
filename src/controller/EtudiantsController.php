<?php

// PagesController.php

class EtudiantsController {

    // Afficher tous les etudiants

    public function liste() {

        $etudiants = Etudiant::findAll();
        view('etudiants.liste', compact('etudiants'));
        }
    
    // Ajouter un etudiant grâce aux questionnaires

    public function add() {
        view('etudiants.add');
        }

    // Ajouter un etudiant grâce aux formulaires

    public function save() {
        $etudiant = new Etudiant;
        $etudiant->setId($_POST['id']);
        $etudiant->setNom($_POST['nom']);
        $etudiant->setMail($_POST['mail']);

        $etudiant->save();

        redirectTo('liste-etudiants');
    }

    // Changer les données de chaque étudiants
    public function edit($id) {
            $etudiant = Etudiant::findOne($id);
    
        view('etudiants.edit', compact('etudiant'));
    }
        
    public function update($id) {
        $etudiant = etudiant::findOne($id);
        $etudiant->setNom($_POST['nom']);
        $etudiant->setMail($_POST['mail']);

        $etudiant->update();

        // On redirige vers la page de l'étudiant
        Header('Location: ' . url('liste-etudiants/' . $etudiant->getId() ));

        }
        
    public function delete($id) {
        $etudiant = Db::findOne($id);
        $etudiant->delete();

        // On redirige vers la liste des étudiants
        Header('Location: ' . url('etudiant'));
         }
}