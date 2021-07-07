<!DOCTYPE html>
<?php

include_once SITE_PATH . '\includes\Statics.php';
include_once Statics::$connectToTheController_path;

?>
<html>

<head>
    
    
    <meta charset="UTF-8">
    <title>Articles</title>
    <link rel="stylesheet" type="text/css" href="<?php echo SITE_URL; ?>/css/style.css" />

    
</head>

<body>
    <div id="page">
        <main>
            <nav>
                <ul>
                    <li><a href="<?php echo SITE_URL.Statics::$home ?>">Accueil</a></li>
                    <li><a href="<?php echo SITE_URL.Statics::$articles_list; ?>">Articles</a></li>
                    <li><a href="<?php echo SITE_URL.Statics::$contact_form; ?>">Contact</a></li>
                    <!--what come after question mark(?), are parameters that are added after the current URL(SITE_URL)-->
                </ul>
            </nav>            
            
            <?php
            
           // Now page.php is the responsible for handling all the tabs, so it has to act the way that it works for all of them.   
        
           ConnectToTheController::connectAndRender( $datas['page'], $datas['action'], $datas['router'] );
           //These datas come from the class that this page(page.php) is being included in.
           //We're rendering the content inside page.php (at the first step), which is ($page:articles_list AND $action:details)
         
            ?>
            
        </main>
    </div>
    
    <button id="my_btn"><a href="<?php echo SITE_URL.Statics::$add_article; ?>">Add article</a></button>



</body>

</html>