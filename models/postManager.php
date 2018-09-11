<?php 

class postManager extends dbConnect
{
	public function getTopics()
	{
    $DB = connectDB();
    $req = $DB->query('SELECT * FROM f_cat');
    return $req;
	}

	public function getPost($postID)
	{
    $DB = $this->connectDB();
    $req = $DB->prepare('SELECT * FROM f_topics WHERE id_topic = ?');
    $req->execute(array($postID));
    $post = $req->fetch();
    return $post;
	}

}