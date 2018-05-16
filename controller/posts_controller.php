<?php


class PostsController {

 public static function index() {


  $posts = Post::all();
  //fonction all crée dans models/post qui va se connecter à la BDD grâce à SELECT
  require_once ('views/posts/index.php');
 }


 public function show() {
   //ma page show dans "vue" permet de voir le contenu des posts et de faire des com
  if (!isset($_GET['id'])){
   return call('pages', 'error'); 
   
  } else {
   $post = Post::find($_GET['id']);
   $comments = Comment::getCommentsByIdPost($_GET['id']);
   require_once ('views/posts/show.php');
  }
 }

 
 public function create() {
  require_once ('views/posts/create.php');
 }

 public function insert() {
  Post::insert(array(
      'title' => $_POST['title'],
      'author' => $_POST['author'],
      'content' => $_POST['content'],
  ));
  $posts = Post::all();
  require_once('views/posts/index.php');
 }

 public static function edit(){
        if(!isset($_GET['id'])){
                return call ('page', 'error');
       }else{
          $post = Post::find($_GET['id']);
          require_once('views/posts/edit.php'); 
       }
    }
    
    public static function update() {
        $post = Post::update(array(
            'id' => $_GET['id'],
            'title' => $_POST['title'],
            'author' => $_POST['author'],
            'content' => $_POST['content']
            ));
         $post = Post::find($_GET['id']);
   require_once ('views/posts/show.php');
    }
 

 
   public static function supp(){
        if (!isset($_GET['id'])){
            return call ('pages' , 'error');
        }else{
            $post = Post::find($_GET['id']);
            require_once('views/posts/delete.php');
        }
    }
 
 
 
  public static function delete(){
        $post = Post::delete(array(
            'id' => $_GET['id'],
         
            ));
            self::index();

    }
 
 
}

 
 
