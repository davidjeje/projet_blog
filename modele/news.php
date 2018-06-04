<?php
function afficher_news()
{
	global $bdd;
	$news= array();
	$req= $bdd ->query('SELECT id, author, title, chapo FROM blog_post');
	while ($data = $req->fetchall()) 
	{
		
		$news = $data;
		return $news;
	}
};

