<h2>Voici le billet que vous avez demandé :)</h2>
<p> titre : <?php echo $post->title; ?> </p>
<p> auteur : <?php echo $post->author; ?> </p>
<p> contenu : <?php echo $post->content; ?> </p>
<p> date : <?php echo $post->created_date; ?> </p>
<p>Dernière mise à jour: <?php echo $post->update_date; ?></p>


<h3>Ajouter un commentaire:</h3>


<form method="Post" action="?controller=comments&action=insert">
 <p>Auteur:</p>
 <p><input type="text" name="author"/></p>
 <p>Contenu:</p>
 <p><textarea id='content' name='content' ></textarea></p>
 <p><input type="submit" id="submit" value='Envoyer'/></p>
 <input type="hidden" name="id_post" value=<?= $_GET['id']; ?> />
 
</form>
<p>
<?php
    foreach($comments as $comment){
     echo 'auteur : ',$comment->author;
     echo '<br>';
     echo 'content : ', $comment->content;
     echo '<br>';
     echo 'date : ', $comment->created_date;
     echo '<br>', '<br>';
    }
    
//printr($comments);
?>
</p>