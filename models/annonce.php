<?php 

class Annonce{
 public $id;
 public $titre;
 public $prix;
 public $categorie;
 public $region;
 public $auteur;
 public $numero_tel;
 public $description;
 
 
 public function __construct($id, $titre, $prix, $categorie, $region, $auteur, $numero_tel, $description) {
  $this->id = $id;
  $this->titre = $titre;
  $this->prix = $prix;
  $this->categorie = $categorie;
  $this->region = $region;
  $this->auteur = $auteur;
  $this->numero_tel = $numero_tel;
  $this->description = $description;
 } 
  public static function all() {
  //initialise un tableau vide
  $list = [];
  //on récupère l'instance de connexion à la base de données
  $db = Db::getInstance();
  //on passe la requete à la base de données
  $req = $db->query('SELECT * FROM `Annonce`');

  foreach ($req->fetchAll() as $Annonce) {
    $list[] = new Annonce($Annonce['id'], $Annonce['titre'], $Annonce['prix'], $Annonce['categorie'], $Annonce['region'], $Annonce ['auteur'], $Annonce['numero_tel'], $Annonce['description']);
   }
  return $list;
 }
  
 
 
  public static function find($id) {
  $db = Db::getInstance();
  //on verifie que $id est bien un entier
  $id = intval($id);
  $req = $db->prepare('SELECT * FROM `Annonce` WHERE id = :id');
  //la requete est prete, on remplace :id avec la valeur de $id
  $req->execute(array('id' => $id));
  $Annonce = $req->fetch();

  return new Annonce($Annonce['id'], $Annonce['titre'], $Annonce['prix'], $Annonce['categorie'], $Annonce['region'], $Annonce['auteur'], $Annonce['numero_tel'], $Annonce['description']);
 }

 public static function insert($param) {
//  printr($param);
//  initialise connexion to db
  $db = Db::getInstance();
//  var_dump($champs);
  
  $titre = $param['titre'];
  $prix = $param['prix'];
  $categorie = $param['categorie'];
  $region = $param['region'];
  $auteur = $param['auteur'];
  $numero_tel = $param['numero_tel'];
  $description = $param['description'];
  
  //***************** requete **************
  $requete = "INSERT INTO Annonce (`titre`, `prix`,`categorie`,`region`,`auteur`,`numero_tel`,`description`) VALUES (:titre, :prix, :categorie, :region, :auteur, :numero_tel, :description )";

  $req = $db->prepare($requete);
  $req->bindValue(':titre', $titre, PDO::PARAM_STR);
  $req->bindValue(':prix', $prix, PDO::PARAM_INT);
  $req->bindValue(':categorie', $categorie, PDO::PARAM_STR);
  $req->bindValue(':region', $region, PDO::PARAM_STR);
  $req->bindValue(':auteur', $auteur, PDO::PARAM_STR);
  $req->bindValue(':numero_tel', $numero_tel, PDO::PARAM_INT);
  $req->bindValue(':description', $description, PDO::PARAM_STR);
  $req->execute();
  
//   return $db->lastInsertId();
  
 }
 
 
 
 
 
 
 
 
 
 }

?>



