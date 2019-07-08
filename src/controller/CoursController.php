<?php

// PagesController.php

class CoursController {

    // Afficher tous les courss

    public function liste() {

        $cours = Cours::findAll();
        view('cours.liste', compact('cours'));
        }
    
    // Ajouter un cours grâce aux questionnaires

    public function add() {
        view('cours.add');
        }

    // Ajouter un cours grâce aux formulaires

    public function save() {
        $cours = new cours;
        $cours->setId($_POST['id']);
        $cours->setTitre($_POST['titre']);
        $cours->setProfesseur($_POST['professeur']);

        $cours->save();

        redirectTo('liste-cours');
    }

    // Changer les données de chaque étudiants
    public function edit($id) {
            $cours = cours::findOne($id);
    
        view('courss.edit', compact('cours'));
    }
        
    public function update($id) {
        $cours = cours::findOne($id);
        $cours->setNom($_POST['nom']);
        $cours->setMail($_POST['mail']);

        $cours->update();

        // On redirige vers la page de l'étudiant
        Header('Location: ' . url('liste-courss/' . $cours->getId() ));

        }
        
    public function delete($id) {
        $cours = Db::findOne($id);
        $cours->delete();

        // On redirige vers la liste des étudiants
        Header('Location: ' . url('cours'));
         }
}