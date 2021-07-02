<?php

include SITE_PATH . '/includes/Bootstrap.php';
//include SITE_PATH . '/includes/Db.php';
Bootstrap::url();

//$controller = new Controller( Bootstrap::$page, Bootstrap::$action, Bootstrap::$router );
//$datas = $controller->datas();
//$file_name = $controller->view();

include SITE_PATH . '/includes/Template.php';
Template::page([ 
    'page' => Bootstrap::$page, 
    'action' => Bootstrap::$action, 
    'router' => Bootstrap::$router ]);