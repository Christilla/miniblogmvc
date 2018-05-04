<p>Ajouter un billet</p>

<<<<<<< HEAD
<form method="Post" action="?controller=posts&action=insert">
 <p><input type="text" name="title" id="title" /></p>
 <p><label>author</label></p>
 <p><input type="text" name="author" id="author"/></p>
 <p><label>contenu</label></p>
 <p><textarea id='content' name='content' ></textarea></p>
=======
<form method="Post" action="?controller=post&action=insert">
 <p><label>author</label></p>
 <p><input type="test" name="author" id="author"/></p>
 <p><label>contenu</label></p>
 <p><textarea id='content' name='content' ></textarea></p>
 <p><input type="hidden" name="created_date" value="<?php
 
 $created = date ('d,m,Y h:i:s'); echo '$created';?>"></p>
>>>>>>> 27f435d8f3569c5e68b47aad29af84d6431ddf8b
 
 <p><input type="submit" id="submit"/></p>
 
</form>


