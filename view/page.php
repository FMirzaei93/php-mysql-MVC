<!DOCTYPE html>
//<?php
//$controller = new Controller( $page, $action );
//$datas = $controller->datas();
//$file_name = $controller->view();
//
//?>
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
                    <li><a href="?page=articles">Articles</a></li>
                    <li><a href="?page=contact">Contact</a></li>
                    <!--what come after question mark(?), are parameters that are added after the current Url-->
                </ul>
            </nav>
            <?php include SITE_PATH . '/view/articles/articles.php';
            //It means that the content of articles.php is located in page.php(the current file). If we included it in index.php file(like what we did with page.php(current file)), it would be placed after/before(depending on where we would place it) what we created in page.php.
            
            
           // <?php include SITE_PATH . '/view/' . $file_name . '.php';  
            
           // <?php self::_includeInTemplate( $datas['page'], $datas['action'], $datas['router'] );
           // Since the display is executed during the rendering operation, the call to the _includeInTemplate() method is possible since it is present in the same class.
            
         
            ?>
            
            
        </main>
    </div>
</body>

</html>