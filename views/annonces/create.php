<h3>Créer une annonce</h3>


<form method="Post" action="?controller=annonces&action=insert">
  <p><label>Nom de l'annonce</label></p>
 <p><input type="text" name="titre" id="titre"/></p>
 
   <p><label>Prix de l'annonce</label></p>
 <p><input type="number" min="2" max="1000000" name="prix" id="prix" /></p>
 
 <p><label>Catégorie</label></p>
 <select id='categorie' name='categorie' >
  <option value='Vêtements'>Vêtements</option>

  <option value='Jouets'>Jouets</option>

  <option value='Véhicules'>Véhicules</option>

  <option value='Immobilier'>Immobilier</option>

  <option value='Multimedia'>Multimédia</option>

  <option value='Maison'>Maison</option>

  <option value='Matériel Professionnel'>Matériel Professionnel</option>

  <option value='Loisirs'>Loisirs</option>

  <option value='Emploi & Services'>Emploi & Services</option>

  <option value='Autres'>Autres</option>
  
  
 </select>
 
 <p><label>Votre region</label></p>
 <select id='region' name='region' >
  <option value="Alsace"> Alsace</option>

  <option value="Aquitaine">Aquitaine</option>

  <option value="Auvergne">Auvergne</option>

  <option value='Bourgogne'>Bourgogne</option>

  <option value= 'Bretagne'>Bretagne</option>

  <option value='Centre'>Centre</option>

  <option value='Champagne-Ardennes'>Champagne-Ardennes</option>

  <option value='Corse'>Corse</option>

  <option value='Franche-Comté'>Franche-Comté</option>

  <option value='Guadeloupe'>Guadeloupe</option>

  <option value='Guyane'>Guyanne</option>

  <option value='Île de France'>Île de France</option>

  <option value='Languedoc-Roussillon'>Languedoc-Roussillon</option>

  <option value='Limousin'>Limousin</option>

  <option value='Lorraine'>Lorraine</option>

  <option value='Martinique'>Martinique</option>

  <option value='Mayotte'>Mayotte</option>

  <option value='Midi-Pyrénées'>Midi-Pyrénées</option>

  <option value='Nord-Pas-De-Calais'>Nord-Pas-De-Calais</option>

  <option value='Basse-Normandie'>Basse-Normandie</option>

  <option value='Haute-Normandie'>Haute-Normandie</option>

  <option value='Pays de la Loire'>Pays de la Loire</option>

  <option value='Picardie'>Picardie</option>

  <option value='Poitou-Charentes'>Poitou-Charentes</option>

  <option value='Provence-Alpes-côte d\'Azur'>Provence-Alpes-côtes d'Azur</option>

  <option value ='La Réunion'>La Réunion</option>

  <option value='Rhône-Alpes'>Rhône-Alpes</option>
  
 
 </select>
<p><label>Votre nom</label></p>
 <p><input type="text" name="auteur" id="auteur" /></p>
 <p><label>Votre numéro de téléphone</label></p>
 <p><input id='numero_tel' name='numero_tel' /> </p>
 
<p><label>Description de l'annonce</label></p>
 <p><textarea id='description' name='description' /></textarea></p>


 
 <p><input type="submit" id="submit" value='Envoyer'/></p>
 
</form>


