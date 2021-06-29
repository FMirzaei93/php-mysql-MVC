<h1>Articles</h1>

<?php 
if( isset( $datas[ 'articles' ] ) )
{
    while( $row = $datas[ 'articles' ]->fetch_array() )
    //fetch_array() function is used to fetch rows from the database and store them as an array.
    {
    ?>
<article>
    <h2><a
            href="<?php echo SITE_URL; ?>/index.php?page=articles&action=details&id=<?php echo $row[ 'IdArticle' ]; ?>"><?php echo $row[ 'TitleArticle' ]; ?></a>
    </h2>
    <p>
        <?php echo $row[ 'IntroArticle' ]; ?>
    </p>
</article>
<?php
    }
}