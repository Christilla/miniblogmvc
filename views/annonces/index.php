<h1>Bienvenue sur la page annonce!</h1>

<!--<img src="../chaise.jpg" alt="chaise"/>-->
<div class="infos">
 <h3 id="titre">Annonce: Chaises</h3>
 <ul>
  <li>Catégorie : Immobilier</li>
  <li>Prix : 45 euros</li>
  <li>Region : Languedoc-Roussillon</li>
  <li> Vendeur : Jean-Michel</li>
  <li> Numéro de téléphone: </li>

 </ul>
 
</div>

<div class="description">
 <h3>Description: </h3>
 <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus hendrerit justo sit amet tristique consequat. Nullam vel velit arcu. Quisque non aliquam enim. Donec lacinia sed mauris quis feugiat. Nam mi sem, tempus sit amet laoreet sed, lobortis ac sem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus congue consectetur faucibus. Proin porttitor diam nec tellus sodales tincidunt. Sed volutpat velit at neque viverra, sit amet ornare felis lacinia. Nunc in laoreet nunc. Praesent eu dolor eu ligula bibendum egestas. Nunc consequat justo vel est fermentum, sed hendrerit sapien imperdiet. Nulla neque felis, venenatis eu ante in, semper molestie mi. Morbi neque ligula, porttitor ac auctor ac, hendrerit sit amet tortor.</p>
 
</div>

<p><a href='?controller=annonces&action=create'>Créer une nouvelle annonce</a></p>

<!--Boucle foreach va chercher dans le tableau Annonce chaque valeur et faire une boucle à chaque affichage-->
<?php
foreach($Annonce as $ObAnnonce){
 echo '<b> Titre : </b>'. $ObAnnonce->titre. '<br/>'; 
 echo '<b> Prix : </b>'. $ObAnnonce->prix.'<br/>';  
 echo '<b> Categorie : </b>'.$ObAnnonce->categorie.'<br/>';
 echo '<b> Region : </b>'.$ObAnnonce->region.'<br/>'; 
 echo '<b> Auteur : </b>'.$ObAnnonce->auteur.'<br/>'; 
 echo '<b> Telephone : </b>'.$ObAnnonce->numero_tel.'<br/>' ; 
 echo '<b> Description : </b>'.$ObAnnonce->description.'<br/>';
 echo '<br/>';
};



    
//printr($Annonce);
?>