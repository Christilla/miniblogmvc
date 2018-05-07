<p>Voici le billet que vous avez demandé:</p>
<p> titre : <?php echo $post->title; ?> </p>
<p> auteur : <?php echo $post->author; ?> </p>
<p> contenu : <?php echo $post->content; ?> </p>
<p> date : <?php echo $post->created_date; ?> </p>
<p>Dernière mise à jour: <?php echo $post->update_date; ?></p>




<h3>Ajouter un commentaire:</h3>


<form method="Post" action="?controller=posts&action=insert">
 <p><textarea id='content' name='content' ></textarea></p>
 <p><input type="submit" id="submit"/></p>
 
</form>

