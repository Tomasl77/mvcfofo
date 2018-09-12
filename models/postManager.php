<?php 

class postManager extends dbConnection
{

    public function getCategories()
    {
        $DB = $this->connectDB();
        $req = $DB->query('SELECT * FROM f_cat');
        return $req;
    }
	
    public function getTopics($page)
	{
        $DB = $this->connectDB();
        $req = $DB->query('SELECT * FROM f_cat WHERE page = ?');
        $req->execute(array($page));
        $showpage = $req->fetch();
        return $showpage;
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