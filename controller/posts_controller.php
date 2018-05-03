<?php
class PostsController {
 
 public function index() {
  $posts = Post::all();
  //require_once ('views/pages/index.php');
  require_once ('views/posts/index.php');
 }
 
 

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
 
 
 
}
