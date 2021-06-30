<?php

function articles()
{
    $datas = array();
    
    $db = Db::connect();

    $results = $db->query( 'SELECT * FROM articles' );

    if( !$db->errno && $results->num_rows > 0 )
    {
        $datas[ 'articles' ] = $results;
    }
    
    $datas[ 'view' ] = 'articles';
    
    return $datas;
}


function article( $id )
{
    $datas = array();
    
    $db = Db::connect();

    $id = $db->real_escape_string($id);

    $results = $db->query( 'SELECT * FROM articles WHERE IdArticle ='.$id);

    if( !$db->errno && $results->num_rows > 0 )
    {
        $datas[ 'article' ] = $results;
    }
    
    $datas[ 'view' ] = 'article_detail';
    
    return $datas;
}