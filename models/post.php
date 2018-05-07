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


 public static function insert($array) {
     //initialise connexion to db
   $title = $_POST['title'];
   $author = $_POST['author'];
   $content = $_POST['content'];
   $db = Db::getInstance();
   //var_dump($champs);
   //***************** requete **************
     $requete = "INSERT INTO posts (`title`, `author`,`content`,`created_date`) VALUES (:title, :author, :content, NOW())";
     $req = $db->prepare($requete);
     $req->bindValue(':title', $title, PDO::PARAM_STR);
     $req->bindValue(':author', $author, PDO::PARAM_STR);
     $req->bindValue(':content', $content, PDO::PARAM_STR);
     $req->execute();

   }
   
public static function update($array){

 

    $db= db::getInstance();

    $req = $db->prepare('UPDATE post SET author = :author, content = :content WHERE id = :id');

    $req->bindValue(':author', $array['author'], PDO::PARAM_STR);

    $req->bindValue(':id', $array['id'], PDO::PARAM_INT);

    $req->bindValue(':content', $array['content'], PDO::PARAM_STR);

    $req->execute();



}

public static function delete($array){

    $id = $array['id'];

    $db= db::getInstance();

    $req = $db->prepare('DELETE FROM `posts` WHERE id = :id ');

    $req->bindValue(':id', $id, PDO::PARAM_INT);

  

    $req->execute();

}



}
