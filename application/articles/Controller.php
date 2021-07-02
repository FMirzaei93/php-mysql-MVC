<?php
namespace application\articles;

class Controller {
    
 private $_action;
 private $_page;
 private $_datas;
 private $_view;
 


 public function __construct( $page, $action )
 {
 $this->_page = $page;
 $this->_action = $action;
 $this->_datas = [];
 $this->_view = 'articles';
 
 
  include SITE_PATH . '/includes/Db.php';
  include SITE_PATH . '/includes/Queries.php';


 
 
 
    switch( $this->_action )
    {
        case 'details' :
           $this->_getAllRows();
        break;
        
    
        case 'add' :
            $this->_datas = [];
            $this->_view = 'article_form';
        break;
    
    
        default : 
            
            $this->_datas = [];
            $this->_view = 'page';
        break;
    }
 
 } 

 
 
 private function _getAllRows()
 {
    $query = new \Queries();
    $articles = $query-> getRowsArray('articles'); 
//    return $articles;
    $this->_datas['articlesList'] = $articles;
 }
 
 


 public function datas()
 {
// The datas() method will process the information and transmit the data to be transmitted to the interface.
// It must always be executed before the view () method because it will influence the interface to display.
 return $this->_datas;
 }


 public function view()
 {
//The view() method will inform the interface to display.
    return 'articles/'.$this->_view;
 }
}


//--------------------  Usage  ----------------

//    
//$page = ( empty( $_GET[ 'page' ] ) ) ? 'contact' : $_GET[ 'page' ];
//$action = ( empty( $_GET[ 'action' ] ) ) ? '' : $_GET[ 'action' ];
//include SITE_PATH . '/application/' . $page . '/Controller.php';
//$controller = new Controller( $page, $action );
//$datas = $controller->datas();
//$file_name = $controller->view();
    