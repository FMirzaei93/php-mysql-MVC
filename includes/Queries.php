<?php

Class Queries{
 private $mysqlObj;
 function __construct()
 {
 $this->mysqlObj = Db::connect();
 }

//-------------------------------------------- Create a query --------------------------------------
 
 private function _query( $query )
 {
 $result = $this->mysqlObj->query( $query );
 
 return $result;
 }
 
 
 //----------------------------------------- Select all rows -------------------------------------
 
 public function select( $table )
 {
     
 $query = 'SELECT * FROM '. $table;
 $results = $this->_query( $query );
 
  if( $results )
 {
   $rows = array();
while( $r = $results->fetch_array() )
//It gives each row respectively
   {
     array_push($rows, $r);
   }
}
 
else
   {
    $rows = false;
   }

return $rows;
}


//----------------------------- Get a specific row by id ------------------------------------


public function getARow($table, $id){
    
    $query = 'SELECT * FROM '.$table.' WHERE IdArticle =' .$id;
    $result = $this->_query($query);
    
     if( $result )
 {
   $row = $result->fetch_array();
 }
else
   {
    $row = false;
   }

return $row;
}


//----------------------------------------- The escape function --------------------------------

public function escape( $value )
{
return ' \''.$this->mysqlObj->real_escape_string( $value ).'\' ';
}



//--------------------------------------- Insert a row ------------------------------------------

public function insert( $table, $values )
{
    
// The general pattern : INSERT INTO table_name(column_1, column_2, ...) VALUES (value_1, value_2, ...);
$strField = '';
$strValue = '';

$array_size = sizeof($values);
$n = 0;

foreach( $values as $column => $value ){
 
    if($n<$array_size-1){
    
    $strField .= $column.', ';
    $strValue .=  "'".$value. "'".', ';
    }

    else {
    //    the last item
    $strField .= $column;
    $strValue .=  "'".$value. "'";
    }

    $n++;
}

  $query = 'INSERT INTO ' .$table. ' ('.$strField.') VALUES ('.$strValue.')';
  echo $query;
  
  $this->_query( $query );

}


//---------------------------------Update a row ---------------------------------------------


public function update( $table, $values, $id )
{
    
//The general pattern: UPDATE table_name SET column1 = value1, column2 = value2, ... WHERE condition;
    
$str = '';
$n = 0;
$array_size = sizeof($values);

foreach( $values as $column => $value )
{
//$str .= ( $n > 0 ) ? ', ' : '';
//$str .= $field. '=' .$this->escape( $value );
    
    if($n<$array_size-1){
    
        $str .= $column.' = '."'".$value. "'".', ';
    }

    else {
    //    the last item
        $str .= $column.' = '."'".$value. "'";
    }

$n++;

}

$query = 'UPDATE '.$table.' SET ' .$str.' WHERE '.$id ;
  echo $query;
  $this->_query( $query );

}


//-------------------------------- Delete a row ----------------------------------------------


public function delete( $table, $id )
{
$query = 'DELETE FROM ' .$table. ' WHERE ' .$id;
$this->_query( $query );
}



//--------------------------------------------------------------------------------------------

}