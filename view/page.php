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
                    <li><a href="<?php echo SITE_URL; ?>/articles">Articles</a></li>
                    <li><a href="<?php echo SITE_URL; ?>/contact/form">Contact</a></li>
                    <!--what come after question mark(?), are parameters that are added after the current Url-->
                </ul>
            </nav>
            <?php
           
           //Including
         
           self::_includeInTemplate( $datas['page'], $datas['action'], $datas['router'] );
           // Since the display is executed during the rendering operation, the call to the _includeInTemplate() method is possible since it is present in the same class.
         
            ?>
            
            
        </main>
    </div>
</body>

</html>