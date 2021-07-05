<?php

include SITE_PATH . '\includes\Bootstrap.php';
include SITE_PATH . '\includes\RenderView.php';

include SITE_PATH . '\includes\ConnectToTheController.php';


$initial_url = ( empty( $_GET['page'] ) ) ? 'home' : $_GET['page'];  
Bootstrap::splitTheUrl($initial_url);
//       $_GET['page']: is the full url that comes after index.php? (Look at htaccess file)
//       'articles/details':  We consider it as our initial url so far (because the first time the url is empty)
   

//Rendering the page.php
$_initial_view='page.php';
RenderView::render( $_initial_view, [ 
                                       'page' => Bootstrap::$page, 
                                       'action' => Bootstrap::$action, 
                                       'router' => Bootstrap::$router ] );  


