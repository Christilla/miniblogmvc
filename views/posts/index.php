<p>Voici une liste de tout les posts:</p>

<?php foreach($posts as $post) { ?>
<p>
  <?php echo $post->author; ?>
  <a href='?controller=posts&action=show&id=<?php echo $post->id; ?>'>Voir le contenu</a>
</p>
 
<?php } ?>