<h1>Liste de tout les posts:</h1>

<?php foreach($posts as $post) { ?>
<p>

  <?php echo $post->title; ?>
  <a href='?controller=posts&action=show&id=<?php echo $post->id; ?>'>Voir le contenu</a> 
 
</p>
 


<a href='?controller=posts&action=create'>Créer un nouveau post</a>
<a href ='?controller=posts&action=edit&id=<?php echo $post->id ?>'>Modifier</a>
<a href ='?controller=posts&action=supp&id=<?php echo $post->id ?>'>Supprimer</a>
 

<?php } ?>
