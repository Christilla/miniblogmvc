<?php
class Comment{
   public $id;
   public $id_posts;
   public $author;
   public $content;
   public $created_date;


   public function __construct($id, $id_posts, $author, $content, $created_date) {
    $this->id = $id;
    $this->id_posts = $id_posts;
    $this->author = $author;
    $this->content = $content;
    $this->created_date = $created_date;

   }
  public static function getCommentsByIdPost($pIdPost) {
  //initialise un tableau vide
  $list = [];
  //on récupère l'instance de connexion à la base de données
  $db = Db::getInstance();
  //on passe la requete à la base de données
    $requete = "SELECT * FROM `commentaires`WHERE id_post = :id_post";
//    echo $requete;

    $req = $db->prepare($requete);
    $req->bindValue(':id_post', $pIdPost, PDO::PARAM_INT);
    $req->execute();

  foreach ($req->fetchAll() as $post) {
   $list[] = new Comment($post['id'],$post['id_post'], $post['author'], $post['content'], $post['created_date']);
  }
  return $list;
 }

 public static function find($id) {
  $db = Db::getInstance();
  //on verifie que $id est bien un entier
  $id = intval($id);
  $req = $db->prepare('SELECT * FROM `commentaires` WHERE id = :id');
  //la requete est prete, on remplace :id avec la valeur de $id
  $req->execute(array('id' => $id));
  $post = $req->fetch();

  return new Post($post['id'], $post['id_posts'],$post['title'], $post['author'], $post['content'], $post['created_date']);
 }

   public static function insert($pAuthor, $pContent, $pIdPost) {
    echo ('Hi!');
    //initialise connexion to db
    $db = Db::getInstance();
//    var_dump($champs);
    //***************** requete **************
    $requete = "INSERT INTO commentaires (`id_post`, `author`,`content`,`created_date`) VALUES (:id_post, :author, :content, NOW())";
//    echo $requete;

    $req = $db->prepare($requete);
    $req->bindValue(':id_post', $pIdPost, PDO::PARAM_INT);
    $req->bindValue(':author', $pAuthor, PDO::PARAM_STR);
    $req->bindValue(':content', $pContent, PDO::PARAM_STR);
    $req->execute();
    
    return $db->lastInsertId();
   }



 public static function delete($array) {

  $id = $array['id'];

  $db = db::getInstance();

  $req = $db->prepare('DELETE FROM `commentaires` WHERE id = :id ');

  $req->bindValue(':id', $id, PDO::PARAM_INT);



  $req->execute();
 }
}


?>
