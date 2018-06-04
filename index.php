<?php if ((!empty($_GET['page']) AND is_file('controleur/'.$_GET['page'].'.php') or $_GET['id']) or isset($_GET['id']))
{
	
	if ($_GET['page'] == 'news') 
    {
    	include('controleur/'.$_GET['page'].'.php');
        afficher();
    } 

    elseif ($_GET['page'] == 'admin' ) 
    {
    		include ('controleur/'.$_GET['page'].'.php');
    		unblog();
    	
    }

    elseif ( $_GET['id'] > 0)
    {
    	include ('controleur/'.$_GET['admin'].'.php');
    	unblog();
    	afficher();
    }

    elseif ($_GET['page'] == 'index') 
    {

        include('controleur/'.$_GET['page'].'.php');
        administrateur();
    }
}
   
else
{
	include('controleur/index.php');
	accueil();
}
?>

