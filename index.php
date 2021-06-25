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



// ---------------------------------------------- Testing -----------------------------------------




$_mysqlObj = Db::connect();



$datas = array();
$id=5;
$id = $_mysqlObj->real_escape_string($id);

//------------------------------------ Grtting all columns and infos ---------------------------------------------


// $results = $_mysqlObj->query('SELECT * FROM articles');
// while( $rows = $results->fetch_object() )
// {
//     echo $rows->TitleArticle . '<br>';
// }

//----------------------------------Getting a specific row with id -------------------------------------------------

$result = $_mysqlObj->query( 'SELECT * FROM articles WHERE IdArticle =' .$id );
$row = $result->fetch_object();
// print_r($row->IntroArticle);



//---------------------------------------- Insert ------------------------------------------------------------------


// $IdArticle = $_mysqlObj->real_escape_string($_POST[6]);
// $TitleArticle = $_mysqlObj->real_escape_string($_POST['New inserted title']);
// $IntroArticle = $_mysqlObj->real_escape_string($_POST['New Intro']);
// $ContentArticle = $_mysqlObj->real_escape_string($_POST['New Content']); 

// $_mysqlObj->query("INSERT INTO articles( IdArticle, TitleArticle, IntroArticle, ContentArticle ) VALUES ('$IdArticle', '$TitleArticle', '$IntroArticle', '$ContentArticle' ) ");



//----------------------------------------------------- prepare and bind ---------------------------------------------


$stmt = $_mysqlObj->prepare("INSERT INTO articles (IdArticle, TitleArticle, IntroArticle, ContentArticle) VALUES (?, ?, ?)");
$stmt->bind_param("isss", $IdArticle, $TitleArticle, $IntroArticle,$ContentArticle);

$IdArticle =6;
$TitleArticle = $_POST['New inserted title'];
$IntroArticle = $_POST['New Intro'];
$ContentArticle = $_POST['New Content']; 

$stmt->execute();





//-----------------------------------------------------Using the Queries class:--------------------------------------------


$query = new Query()
$query->select( 'SELECT * FROM articles' );

foreach( $rows as $row )
{
?>
<article>
    <h2><?php echo $row[ 'TitleArticle' ]; ?></h2>
</article>
<?php
} 


// -----------------------------------------------------


$values = array(
    'IdArticle' => null,
    'TitleArticle' => $_POST['TitleArticle'],
    'IntroArticle' => $_POST['IntroArticle'],
    'ContentArticle' => $_POST['ContentArticle']
   );
   $query = new Query()
   $query->insert( 'articles', $values );



// -----------------------------------------------------



   $values = array(
    'TitleArticle' => $_POST['TitleArticle'],
    'IntroArticle' => $_POST['IntroArticle'],
    'ContentArticle' => $_POST['ContentArticle']
   );
   $query = new Query()
   $query->update( 'articles', $values, 'IdArticle' = $id );


// -----------------------------------------------------



   $query = new Query()
   $query->delete( 'articles', 'IdArticle' = $id );