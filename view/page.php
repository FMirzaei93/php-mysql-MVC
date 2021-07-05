<!DOCTYPE html>
<?php

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
                    <li><a href="<?php echo SITE_URL; ?>/home">Accueil</a></li>
                    <li><a href="<?php echo SITE_URL; ?>/articles/details">Articles</a></li>
                    <li><a href="<?php echo SITE_URL; ?>/contact/form">Contact</a></li>
                    <!--what come after question mark(?), are parameters that are added after the current URL(SITE_URL)-->
                </ul>
            </nav>            
            
            <?php
            
           include_once SITE_PATH . '\includes\ConnectToTheController.php';
        
           ConnectToTheController::connectAndRender( $datas['page'], $datas['action'], $datas['router'] );
           //These datas come from the class that this page(page.php) is being included in.
           //We're rendering the content inside page.php (at the first step), which is ($page:articles_list AND $action:details)
         
            ?>
            
        </main>
    </div>
    
    <button id="my_btn"><a href="<?php echo SITE_URL; ?>/articles/add">Add article</a></button>



</body>

</html>