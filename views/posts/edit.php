<h2>Mettre à jour</h2>


<form method="POST" action="?controller=posts&action=update&id=<?php echo $post->id; ?>">
 <p><input type="text" name="title" id="title" /></p>
 <p><label>auteur</label></p>
 <p><input type="text" name="author" id="author"/></p>
 <p><label>contenu</label></p>
 <p><textarea id='content' name='content' ></textarea></p>


 
 <p><input type="submit" id="submit" value='Envoyer'/></p>
 
</form>