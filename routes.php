<?php
function call($controller, $action) {
 require_once ('controller/'.$controller.'_controller.php');
 
  switch($controller) {
   case ('pages'): 
    $controller = new PagesController();
   break;
   case ('posts'):
    //chargement des models

    require_once ('models/post.php');

    $controller = new PostsController();
   break;
  }
  $controller->{ $action}();
  
}
$routes = array('pages' => ['home', 'error'],

                     'posts' => ['index', 'show','create', 'update','add', 'edit','delete','supp','insert']);

                  


if (array_key_exists($controller, $routes)) {
 if (in_array($action, $routes[$controller])) {
  call($controller, $action);
 }else {
  call('pages', 'error');
 }
}else {
 call('pages','error');
}
