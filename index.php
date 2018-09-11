<?php
require('controllers/frontEnd.php');
try {
/*if (!isset($_SESSION['id'])){
        header('Location: views/frontEnd/logIn.php');
        exit;
    }else{
        listTop();
    }*/

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'listPosts') {
        listPosts();
    }
    elseif ($_GET['action'] == 'post') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            post();
        }else {
            throw new Exception('Erreur : aucun identifiant de réponse envoyé');
        }
    }
    elseif ($_GET['action'] == 'addComment') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            if (!empty($_POST['id_sender']) && !empty($_POST['content'])) {
                addComment($_GET['id'], $_POST['id_sender'], $_POST['content']);
            }
            else {
                throw new Exception('Erreur : tous les champs ne sont pas remplis !');
            }
        }
        else {
            throw new Exception('Erreur : aucun identifiant de billet envoyé');
            }
        }    
    }
    else {
    listTop();
    }
}

catch(Exception $e){
    echo $e->getMessage();
    require('views/frontEnd/viewError.php');
}