<?php

function articles()
{
    $datas = array();
    
    $db = Db::connect();

    $results = $db->query( 'SELECT * FROM articles' );
    // Select all the columns in the table.

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

    //The function checks that the values of variables do not have any hidden queries. It adds an escape character(/), before certain potentially dangerous characters in a string passed in to the function. 
    //The characters which get escaped are: \x00, \n, \r, \, ', " , \x1a.
    //This can help prevent SQL injection attacks which are often performed by using the ' character to append malicious code to an SQL query.

    $results = $db->query( 'SELECT * FROM articles WHERE IdArticle ='.$id);
    // $results = $db->query( 'SELECT * FROM articles WHERE IdArticle = \''.$db->real_escape_string($id).'\'' );


    if( !$db->errno && $results->num_rows > 0 )
    {
        $datas[ 'article' ] = $results;
    }
    
    $datas[ 'view' ] = 'article_detail';
    
    return $datas;
}