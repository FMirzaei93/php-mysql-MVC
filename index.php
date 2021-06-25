<?php

define ( 'SITE_PATH', realpath( dirname(__FILE__) ) ); 
//The project path
// echo(SITE_PATH);                 "C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\php-mvc"



// echo(__FILE__);  //The file      "C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\php-mvc\index.php"
// echo(dirname(__FILE__));         "C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\php-mvc"



$site_url = str_replace('\\', '/', str_replace( realpath( $_SERVER[ 'DOCUMENT_ROOT' ] ), '', SITE_PATH ) );
//the folder of the project.
// echo($site_url);    "/php-mvc"


// echo($_SERVER[ 'DOCUMENT_ROOT' ]); //the path of where the server is running   "C:/Program Files (x86)/EasyPHP-Devserver-17/eds-www" 



define ( 'SITE_URL', 'http://' . $_SERVER['HTTP_HOST'] . $site_url );

//  echo($_SERVER['HTTP_HOST']); localhost:8080
// echo(SITE_URL); http: //localhost:8080/php-mvc

include SITE_PATH . '/includes/Db.php';
include SITE_PATH . '/view/page.php';







$db = Db::connect();



$datas = array();
$id=5;
$id = $db->real_escape_string($id);


// $results = $db->query('SELECT * FROM articles');
// while( $rows = $results->fetch_object() )
// {
//     echo $rows->TitleArticle . '<br>';
// }


$result = $db->query( 'SELECT * FROM articles WHERE IdArticle =' .$id );
$row = $result->fetch_object();
// print_r($row->IntroArticle);


$IdArticle = $db->real_escape_string($_POST[6]);
$TitleArticle = $db->real_escape_string($_POST['New inserted title']);
$IntroArticle = $db->real_escape_string($_POST['New Intro']);
$ContentArticle = $db->real_escape_string($_POST['New Content']); 


$db->query("INSERT INTO articles( IdArticle, TitleArticle, IntroArticle, ContentArticle ) VALUES ('$IdArticle', '$TitleArticle', '$IntroArticle', '$ContentArticle' ) ");

// $TitleArticle = $db->real_escape_string( $_POST['TitleArticle'] );
// $IntroArticle = $db->real_escape_string( $_POST['IntroArticle'] );
// $ContentArticle = $db->real_escape_string( $_POST['ContentArticle'] );

// $db->query( 'INSERT INTO articles( TitleArticle, IntroArticle, ContentArticle )
// VALUES ( \''.$TitleArticle.'\', \''.$IntroArticle.'\', \''.$ContentArticle.'\' )');