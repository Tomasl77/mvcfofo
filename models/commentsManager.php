<?php 
class commentsManager extends dbConnection
{
	public function getComments($postId)
	{
	    $DB = connectDB();
	    $comments = $DB->prepare('SELECT * FROM f_reponse WHERE id_top = ?');
	    $comments->execute(array($postId));
	    return $comments;
	}


	public function postComment($id_top, $id_sender, $content)
	{
	    $db = connectDB();
	    $comments = $db->prepare('INSERT INTO f_reponse(id_top, id_sender, content, creation_date) VALUES(?, ?, ?, NOW())');
	    $affectedLines = $comments->execute(array($id_top, $id_sender, $content));

	    return $affectedLines;
	}
}