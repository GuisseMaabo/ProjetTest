<!DOCTYPE html>
<html>
<head>
	<title>Accueil</title>
</head>
<body>
   <h1>Bienvenue sur Test </h1>
        <h2>Commencez-donc par vous inscrire :</h2>
        <form name="inscription" method="post" action="saisie.php">
            Entrez votre pseudo : <input type="text" name="pseudo"/> <br/>
            Entrez votre ville : <input type="text" name="ville"/><br/>
            <input type="submit" name="valider" value="OK"/>
        </form>
        <?php
			
			if (have_posts()) :
  				 while (have_posts()) :
    				 	 the_post();
   					   	the_content();
  				 endwhile;
			endif;

?>
</body>
</html>
