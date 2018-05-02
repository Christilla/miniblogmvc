<?php
class Post{
 
 public $id;
 public $author;
 public $content;
 
 public function __construct($id, $author, $content) {
  $this->id    = $id;
  $this->author  = $author;
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
  
   foreach($req->fetchAll() as $post) {
    $list[] = new Post($post['id'],$post['author'], $post['content'], $post['created_date']);
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
   
   return new Post($post['id'], $post['author'], $post['content'],  $post['created_date']);
 }
 
}

