<?php
class CommentController {


 public function show() {

  if (!isset($_GET['id'])){
   return call('pages', 'error'); 
   
  } else {
   $post = Post::find($_GET['id']);
   require_once ('views/comments/show.php');
  }
 }

 
 public function insert() {
  $lastId = Comment::insert($_POST['author'], $_POST['content'], (int)$_POST['id_post']);
  $comments = Comment::getCommentsByIdPost((int)$_POST['id_post']);
//  echo $lastId;
//  header('location:?controller=posts&action=show&id='.(int)$_POST['id_post']);
//  require_once ('views/comments/create.php');
 }
 
  public static function delete(){
   $post = Post::delete(array(
            'id' => $_GET['id'],));
            self::index();
  }
        
}

?>
