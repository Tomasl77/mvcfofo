<?php

require_once('./models/dbconnect.php');
require_once('./models/postManager.php');
require_once('./models/commentsManager.php');

function listTop()
{
	$postManager = new PostManager();
    $topics = $postManager->getTopics();
    require('./views/frontEnd/listTopics.php');
}

function getPage()
{
    $postManager = new PostManager();
    $page = $postManager->getTopics();
    require('.views/frontEnd/pages.php');
}
function post()
{
	$postManager = new PostManager();
	$commentsManager = new CommentsManager();

    $post = $PostManager()->getPost($_GET['id']);
    $comments = $commentsManager()->getComments($_GET['id']);

    require('./views/frontEnd/postView.php');
}

function addComment($id_top, $id_sender, $content)

{
	$commentsManager = new CommentsManager();

    $affectedLines = $commentsManager->postComment($id_top, $id_sender, $content);
    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter votre réponse !');
    }
    else {
        header('Location: index.php?action=post&id='.$id_top);
    }
}

function checklog($mail, $password)
{
	$log = logIn($mail, $password);
	if (condition) {
		# code...
	}
}