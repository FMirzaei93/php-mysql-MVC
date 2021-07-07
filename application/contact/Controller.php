<?php
//namespace application\contact;
include_once SITE_PATH . '\includes\Statics.php';

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
 $this->_view = '';
  
 
 
    switch( $this->_action )
    {
        case Statics::$send :
           $this->_checkMessageFields();      
        break;
        
    
        case Statics::$form :
            $this->_datas = [];
            $this->_view = Statics::$contact_form_view;
        break;
    
    
        default : 
            $this->_datas = [];
            $this->_view = Statics::$contact_sent_view;
        break;
    }
 
 } 

 
 private function _checkMessageFields()
 {
 if( isset( $_POST ) ){
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
     
     if( !isset( $datas[ 'error' ] ) ){
       //mail('mail@dom.net', 'Subject', $datas['message'], 'From:'. $datas['email']);
       $this->_view = Statics::$contact_sent_view;
       return;
      }
    
   }
    {$this->_view = Statics::$contact_form_view;}
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
    return $this->_view;
 }
}
