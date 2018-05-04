<?php
function call($controller, $action) {
 require_once ('controller/'.$controller.'_controller.php');
 
  switch($controller) {
   case ('pages'): 
    $controller = new PagesController();
   break;
   case ('posts'):
    //chargement des models
<<<<<<< HEAD
    require_once ('./models/post.php');
=======
    require_once ('models/post.php');
>>>>>>> 27f435d8f3569c5e68b47aad29af84d6431ddf8b
    $controller = new PostsController();
   break;
  }
  $controller->{ $action}();
  
}
$routes = array('pages' => ['home', 'error'],
<<<<<<< HEAD
                     'posts' => ['index', 'show','create', 'update','add', 'edit','delete','supp','insert']);
=======
                     'posts' => ['index', 'show','create','add','insert']);
>>>>>>> 27f435d8f3569c5e68b47aad29af84d6431ddf8b

if (array_key_exists($controller, $routes)) {
 if (in_array($action, $routes[$controller])) {
  call($controller, $action);
 }else {
  call('pages', 'error');
 }
}else {
 call('pages','error');
}
