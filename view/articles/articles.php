<h1>Articles</h1>

<?php 

//$query = new Queries();
//$articles = $query-> getRowsArray('articles'); 

if( isset( $datas[ 'articlesList' ] ) )
//if( isset($articles) )
{
    foreach ($datas[ 'articlesList' ] as $row) 
    {
    ?>
<article>
    <h2><a
            href="<?php echo SITE_URL; ?>/index.php?page=articles&action=details&id=<?php echo $row[ 'IdArticle' ]; ?>"><?php echo $row[ 'TitleArticle' ]; ?></a>
    <!-- The first value indicates the page(articles). It corresponds to the module which will process the information transmitted.-->
    <!--The second value indicates the action to be taken on the page (the defined module). So "details" could assume that the detail of an article would be displayed (the one with specific id).-->
        
    </h2>
    <p>
        <?php echo $row[ 'IntroArticle' ]; ?>
    </p>
</article>
<?php
    }
}