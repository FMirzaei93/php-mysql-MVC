<?php class Bootstrap{

    public static $page; 
    public static $action;
    public static $router;
    
    
    public static function splitTheUrl($url) {                 
        include_once SITE_PATH . '\includes\Statics.php';

        if( !empty( $url ) ){
            
            $parts = explode( '/', $url );           
            self::$page    = ( isset( $parts[0] ) ) ? $parts[0] : '';            
            self::$action  = ( isset( $parts[1] ) ) ? $parts[1] : '';            
            self::$router  = ( isset( $parts[2] ) ) ? $parts[2] : ''; //To whom       
             
        }
        
        
        if( !file_exists( SITE_PATH. '\application\\' .self::$page. '\Controller.php' ) && self::$page!='home'){            
            
            header('HTTP/1.0 404 NOT FOUND');
//            The header() function sends a raw HTTP header to a client. Like header("Cache-Control: no-cache"); 
//            By sending the header above, you will override this settings and force the browser to not cache!
            include SITE_PATH . '\view\404.php';
            exit;        
            
             }    
        
        
        }
       
 }