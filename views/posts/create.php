<p>Ajouter un billet</p>

<form method="Post" action="?controller=post&action=insert">
 <p><label>author</label></p>
 <p><input type="test" name="author" id="author"/></p>
 <p><label>contenu</label></p>
 <p><textarea id='content' name='content' ></textarea></p>
 <p><input type="hidden" name="created_date" value="<?php
 
 $created = date ('d,m,Y h:i:s'); echo '$created';?>"></p>
 
 <p><input type="submit" id="submit"/></p>
 
</form>


