<?php

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
 $this->_view = 'contact';
 
 
    if( $this->_action === 'send' )
    {
    $this->_checkMessageSent();
    }
 
 } 

 
 
 private function _checkMessageSent()
 {
 if( isset( $_POST[ 'email' ] ) ){
 $datas = $_POST;
 
    if( empty( $_POST[ 'email' ] ) ){
 $datas[ 'error' ][ 'emailempty' ] = true;
 }
         else if( !filter_var( $_POST[ 'email' ], FILTER_VALIDATE_EMAIL ) ){
 $datas[ 'error' ][ 'emailformat' ] = true;
 }
    if( empty( $_POST[ 'message' ] ) ){
 $datas[ 'error' ][ 'messageempty' ] = true;
 }
 $this->_datas = $datas;
     if( !isset( $datas[ 'error' ] ) )
 {
 mail('mail@dom.net', 'Subject', $datas['message'], 'From:'.
$datas['email']);

 $this->_view = 'contact_sent';
    }
 }
    $this->_view = 'contact';
 }
 
 


 public function datas()
 {
// The datas () method will process the information and transmit the data to be transmitted to the interface.
// It must always be executed before the view () method because it will influence the interface to display.
 return $this->_datas;
 }


 public function view()
 {
//The view () method will inform the interface to display.
 return 'articles/'.$this->_view;
 }
}


//--------------------  Usage  ----------------
//
//    
//$page = ( empty( $_GET[ 'page' ] ) ) ? 'contact' : $_GET[ 'page' ];
//$action = ( empty( $_GET[ 'action' ] ) ) ? '' : $_GET[ 'action' ];
//include SITE_PATH . '/application/' . $page . '/Controller.php';
//$controller = new Controller( $page, $action );
//$datas = $controller->datas();
//$file_name = $controller->view();
    