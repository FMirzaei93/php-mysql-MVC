<?php

include SITE_PATH . '/includes/Bootstrap.php';
include SITE_PATH . '/includes/Db.php';
$controller = Bootstrap::url();
$controller = new Controller( Bootstrap::$page, Bootstrap::$action, Bootstrap::$router );
$datas = $controller->datas();
$file_name = $controller->view();

