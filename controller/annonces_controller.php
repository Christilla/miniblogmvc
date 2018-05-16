<?php
 class AnnoncesController {
  
  public static function index() {
    $Annonce = Annonce::all();
   require_once ('views/annonces/index.php');
  }
  public static function create(){
   require_once ('views/annonces/create.php');
  }
  
    public static function show() {
echo("hi");
   if (!isset($_GET['id'])){
    return call('pages', 'error'); 

   } else {
    $Annonce = Annonce::find($_GET['id']);
    require_once ('views/annonces/index.php');
   } 

  }
  
   public function insert() {
      Annonce::insert(array(
      'titre' => $_POST['titre'],
      'prix' => $_POST['prix'],
      'categorie' => $_POST['categorie'],
      'region' => $_POST['region'],
      'auteur' => $_POST['auteur'],
      'numero_tel' => $_POST['numero_tel'],
      'description' => $_POST['description']
       ));
  $Annonce = Annonce::all();
  require_once('views/annonces/index.php');
   }

 
 }
?>