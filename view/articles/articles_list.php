

<h1>Articles</h1>

<?php 
include_once SITE_PATH . '\includes\Statics.php';


if( isset( $datas ) )
{
    foreach ($datas as $row) 
    {
    ?>
<article>
    <h2><a
            
           href="<?php echo SITE_URL.Statics::$articles_list
                                    .Statics::$articles_id 
                                    .$row[Statics::$Table_IdArticle ] ?>">
            
                 <?php echo $row[Statics::$Table_TitleArticle]; ?></a>

    </h2>
    <p>
        <?php echo $row[Statics::$Table_IntroArticle ]; ?>
    </p>
    
</article>
<?php
    }
}