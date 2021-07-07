<?php
//namespace application\articles;

include_once SITE_PATH . '\includes\Statics.php';
include Statics::$db_path;
include Statics::$queries_path;
//    back slash means to access a class outside the current namespace.


class Controller {
    
 private $_action;
 private $_page;
 private $_router;
 private $_datas;
 private $_view;
 


 public function __construct( $page, $action,$router )
 {
 $this->_page = $page;
 $this->_action = $action;
 $this ->_router = $router;
 $this->_datas = [];
 
 
    switch( $this->_action )
    {
        case Statics::$list :
            $this->_datas = $this->_getAllRows();
            $this->_view = Statics::$articles_list_view;
        break;
        
    
        case Statics::$add :
            $this->_datas = [];
            $this->_view = Statics::$article_form_view;
        break;
    
    
        case Statics::$send :
        $this->_checkArticleFiels();
        break;
    
    
        default : 
            
            $this->_datas = [];
            $this->_view = Statics::$error404_path;
        break;
    }
    
    
    
    
    if($this->_router !== "") {
    
        $id = $this->_splitId($this->_router); 
        $row = $this->_getARow(Statics::$articles_table_name, $id);
        $details_array = [
            
            Statics::$ContentArticle => $row[Statics::$Table_ContentArticle],
            Statics::$TitleArticle =>$row[Statics::$Table_TitleArticle]
        ]; 
        
        $this->_datas = $details_array;
        $this->_view = Statics::$article_details;
    }
    
    
 
 } 
 
 private function _splitId($router) {
     $id = substr($router, strpos($router, "=") + 1); 
     return $id;
     //it returns everything after "=" .
 }




 private function _checkArticleFiels()
 {
            if( null !== ( filter_input_array(INPUT_POST) ) ){
//                is equal to: if (isset($_POST))
            $datas = filter_input_array(INPUT_POST);
 
    if( empty( filter_input(INPUT_POST, Statics::$TitleArticle)) ){
        //    is equal to: if (empty ($_POST['TitleArticle']))
         $datas[ 'error' ][ 'titleempty' ] = true;
     }
            
                     
    if( empty( filter_input(INPUT_POST, Statics::$IntroArticle)) ){
            $datas[ 'error' ][ 'introempty' ] = true;
        }
              
                
    if( empty(filter_input(INPUT_POST, Statics::$ContentArticle)) ){
            $datas[ 'error' ][ 'contentempty' ] = true;
        }
        
     $this->_datas = $datas;
     
     if( !isset( $datas[ 'error' ] ) ){
         
         $this->_sendNewArticle(Statics::$articles_table_name);
         
       $this->_view = Statics::$article_sent_view;
       return;
      }
    
   }
    $this->_view = Statics::$article_form_view;
 }
 
 
 private function _getAllRows()
 {
    $query = new Queries();
//    This back slash is for accessing the Queries class outside the current namespace.
    $articles = $query-> getRowsArray(Statics::$articles_table_name); 
    return $articles;
 }
 
 
  private function _sendNewArticle($table) {
    $values =[
     Statics::$Table_TitleArticle =>filter_input(INPUT_POST, Statics::$TitleArticle),
     Statics::$Table_IntroArticle => filter_input(INPUT_POST, Statics::$IntroArticle),
     Statics::$Table_ContentArticle => filter_input(INPUT_POST, Statics::$ContentArticle) 
    ];
    $query = new Queries();
    $query->insert( $table, $values );

 }
 
 
  private function _getARow($table,$id){
      
      $query = new Queries();
      $row = $query->getARow($table, $id);
      return $row;

  }
 


 public function datas()
 {
    return $this->_datas;
 }


 public function view()
 {
    return $this->_view;
 }
}

    