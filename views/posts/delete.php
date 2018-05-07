<?php echo ("HI") ?>


<form method="POST" action='?controller=posts&action=delete&id=<?php echo $post->id ?>'>
    
    <p><label>Etes vous sur de vouloir supprimer ? </label></p>
    <p><input type ='submit' value="Supprimer" id='submit'/></p>
</form>

