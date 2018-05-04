<?php
<<<<<<< HEAD

class PostsController {

 public static function index() {
=======
class PostsController {
 
 public function index() {
>>>>>>> 27f435d8f3569c5e68b47aad29af84d6431ddf8b
  $posts = Post::all();
  //require_once ('views/pages/index.php');
  require_once ('views/posts/index.php');
 }
<<<<<<< HEAD

 public function show() {

  if (!isset($_GET['id'])){
   return call('pages', 'error'); 
   
  } else {
   $post = Post::find($_GET['id']);
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
  require_once('./views/posts/index.php');
 }

 public function update() {
  if (!isset($_GET['id']))
   return call('pages', 'error');

  $post = Post::find($_GET['id']);
  require_once ('views/posts/update.php');
 }

=======
 
 

 public function show(){
  
  if (!isset($_GET['id']))
   return call('pages', 'error');
  
  $post = Post::find($_GET['id']);
  require_once ('views/posts/show.php');
  
 }
 

 public function create(){
  echo 'create';
//   $post = Post::create($_GET['id']);
  require_once ('views/posts/create.php');
  
 }
 
 public function insert() {
  Post::create(array(
    'title' => $_POST['title'],
    'author' => $_POST['author'],
    'content' => $_POST['content'],
     'created_date' => date ('d,m,Y h:i:s'),
          ));
  $post = Post::all();
  require_once('views/posts/index.php');
 }
 
 public function update() {
  if (!isset($_GET['id']))
  return call('pages','error');
  
   $post = Post::find($_GET['id']);
  require_once ('views/posts/update.php');
 }
 
 
 
>>>>>>> 27f435d8f3569c5e68b47aad29af84d6431ddf8b
}
