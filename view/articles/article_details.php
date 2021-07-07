<h1>Details</h1>
<?php

include_once SITE_PATH . '\includes\Statics.php';


if(isset($datas)){
    
   ?>
<h2><?php echo $datas[Statics::$Table_TitleArticle]; ?></h2>
    
    <p><?php echo $datas[Statics::$Table_ContentArticle]; ?></p>

<?php
} 


