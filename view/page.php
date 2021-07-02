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
                    <li><a href="<?php echo SITE_URL; ?>/articles/details">Articles</a></li>
                    <li><a href="<?php echo SITE_URL; ?>/contact/form">Contact</a></li>
                    <!--what come after question mark(?), are parameters that are added after the current Url-->
                </ul>
            </nav>
            
            
            <?php
            
           self::_includeInTemplate( $datas['page'], $datas['action'], $datas['router'] );
           // Explanation of using _includeInTemplate directly : in the related method in Template.php class. (You can also refer to the line down  below)
           //$data array comes from Template.php. As this page is including in Templatw.php, So we have acces to its variables and methods
         
            ?>
            
            
        </main>
    </div>
    
    <button id="my_btn"><a href="<?php echo SITE_URL; ?>/articles/add">Add article</a></button>



</body>

</html>