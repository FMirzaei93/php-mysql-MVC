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
include SITE_PATH . '/includes/Queries.php';
include SITE_PATH . '/view/page.php';



//----------------------------------------------------- prepare and bind ---------------------------------------------


// $stmt = $_mysqlObj->prepare("INSERT INTO articles (IdArticle, TitleArticle, IntroArticle, ContentArticle) VALUES (?, ?, ?)");
// $stmt->bind_param("isss", $IdArticle, $TitleArticle, $IntroArticle,$ContentArticle);

// $IdArticle =6;
// $TitleArticle = $_POST['New inserted title'];
// $IntroArticle = $_POST['New Intro'];
// $ContentArticle = $_POST['New Content']; 

// $stmt->execute();

//---------------------------------------------------------------------------------------------------------------------



//                                ***************** Using the "Queries" class: *******************


// ---------------------------------------- Insert ---------------------------------------------



// $values = array(
//     'TitleArticle' =>'My Title',
//     'IdArticle' => 7,
//     'IntroArticle' => 'My Intro',
//     'ContentArticle' => 'My Content'
//    );
//    $query = new Queries();
//    $query->insert( 'articles', $values );



//------------------------------------ Get all rows ---------------------------------------------

    
//
//$query = new Queries();
//$rows = $query->select( 'articles' );
//
//echo '<br>';
//foreach( $rows as $row )
//{
//     echo $row['TitleArticle'] . '<br>';
//} 


//---------------------------------- Get a specific row ---------------------------------------


//$query = new Queries();
//$row = $query->getARow('articles', 5);
//echo $row['TitleArticle'];



// ----------------------------------------- Update --------------------------------------------



//    $id=7;
//    
//    $values = array(
//     'TitleArticle' =>'My Changed Title',
//     'IntroArticle' => 'My Changed Intro',
//     'ContentArticle' => 'My Changed Content'
//   );
//    $query = new Queries();
//    $query->update( 'articles', $values, 'IdArticle='.$id );
//    


// ---------------------------------------------- Delete ---------------------------------------



//    $id=6;
//    $query = new Queries();
//    $query->delete( 'articles', 'IdArticle='.$id );