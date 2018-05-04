<p>Voici une liste de tout les posts:</p>

<?php foreach($posts as $post) { ?>
<p>

  <?php echo $post->title; ?>
  <a href='?controller=posts&action=show&id=<?php echo $post->id; ?>'>Voir le contenu</a> 
 
</p>
 


<a href='?controller=posts&action=create'>Créer un nouveau post</a>

 
<!--  <a href='?controller=posts&action=show&id=<?php echo $post->id; ?>'>Voir le contenu</a> -->
 
<!--</p>
 <a href='?controller=posts&action=create'>Créer un nouveau post</a>
  <a href='?controller=posts&action=update&id=<?php echo $post->id; ?>'>Mettre à jour</a>
 -->
<?php } ?>
