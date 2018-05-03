<?php

class Post {

 public $id;
 public $title;
 public $author;
 public $content;
 public $created_date;

 public function __construct($id, $title, $author, $content, $created_date) {
  $this->id = $id;
  $this->title =$title;
  $this->author = $author;
  $this->content = $content;
  $this->created_date = $created_date;
 }

 public static function all() {
  //initialise un tableau vide
  $list = [];
  //on récupère l'instance de connexion à la base de données
  $db = Db::getInstance();
  //on passe la requete à la base de données
  $req = $db->query('SELECT * FROM `posts` WHERE 1');

  foreach ($req->fetchAll() as $post) {
   $list[] = new Post($post['id'],$post['title'], $post['author'], $post['content'], $post['created_date']);
  }
  return $list;
 }

 public static function find($id) {
  $db = Db::getInstance();
  //on verifie que $id est bien un entier
  $id = intval($id);
  $req = $db->prepare('SELECT * FROM `posts` WHERE id = :id');
  //la requete est prete, on remplace :id avec la valeur de $id
  $req->execute(array('id' => $id));
  $post = $req->fetch();

  return new Post($post['id'],$post['title'], $post['author'], $post['content'], $post['created_date']);
 }

 public static function create($array) {

  //initialise connexion to db

  $db = Db::getInstance();
  $champs = '';
  $marqueurs = '';

  foreach ($array as $key => $value) {

   $champs = '' . $key . ', ';

   $marqueurs = ':' . $key . ', ';
  }

  $champs = rtrim($champs, ', ');
  $marqueurs = rtrim($marquers, ', ');


//var_dump($champs);
//***************** requete **************

  $req = "INSERT INTO posts (" . $champs . ") VALUES (" . $marqueurs . ")";
  $requete = $db->prepare($req);

  foreach ($array as $key => $value) {
   if (is_string($value)) {
    $pdo_param = PDO::PARAM_STR;
   } else {

    $pdo_param = PDO::PARAM_INT;
   }

   $requete->bindValue(":" . $key, $value, $pdo_param);
   //var_dump($requete);
  }
  $requete->execute();
  return $db->lastInsertId('id');
 }

 

}
