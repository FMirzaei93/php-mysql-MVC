<?php

include SITE_PATH . '\includes\Bootstrap.php';
include SITE_PATH . '\includes\RenderView.php';
include SITE_PATH . '\includes\ConnectToTheController.php';
include_once SITE_PATH . '\includes\Statics.php';



$initial_url = ( empty( $_GET['page'] ) ) ? 'home' : $_GET['page'];  
Bootstrap::splitTheUrl($initial_url);
        // $_GET['page']: is the full url that comes after index.php? (Look at htaccess file)   

// ---------------------------- Rendering the page.php -------------------------

$main_view=Statics::$main_view;

RenderView::render( $main_view, [ 
                                  'page' => Bootstrap::$page, 
                                  'action' => Bootstrap::$action, 
                                  'router' => Bootstrap::$router ] );  


