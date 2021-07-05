<?php

class Template {
//     templating engine, helps to integrate the backend and the front end easily.
            

        public static function initTheFirstPage( $urlInfos )
    {
            
        $_initial_page='page.php';
        self::_render( $_initial_page, $urlInfos );       
        
    }

// private static function _includeInTemplate($page, $action='', $router='')
//         //This function is being used in view/page.php class
//        // As we're including page.php in _render() function in this class (in the astrik part down below), and we're calling _includeInTemplate() method in page.php, and these two methods are located in the same class(Template), So for using _includeInTemplate() method in page.php, we can call it directy, just like we would have used it in this class in the _render() method.
//{
// // Operate module inclusions and transmit for rendering
//     
//     if( file_exists(SITE_PATH.'\application\\'.$page.'\Controller.php') )
//     
//    {
//         
//        include_once SITE_PATH.'\application\\'.$page.'\Controller.php';
//
//        $controllerPath = '\application\\'.$page.'\Controller'; //namespace
//
//        $controller = new $controllerPath( $page, $action, $router );
//
//        self::_render( $controller->view(), $controller->datas() );
//    }
//    
//         else
//         {
//            self::_render( 'home' );
//         }
// 
// }
    
    
    

// private static function _render($filepath, $datas='')
// 
// {
////      The rendering operation consists of integrating the data into the view and then displaying the result.
////      The _render() method combines the information that is the names of the views and the data to be displayed in the views
////      In order to do this, the use of the buffer will be required. The ob_start() functions, ob_get_contents() and ob_end_clean() respectively allow to call 
////          the buffer memory, recover data in memory and finally free the memory.
//             
//  if( file_exists( SITE_PATH.'\view\\'.$filepath ) && is_readable( SITE_PATH.'\view\\'.$filepath ) )
//        {
////      ob: output buffering : Output Buffering is a method to tell the PHP engine to hold the output data before sending it to the browser.
//        ob_start();
//        //****************** HERE:
//        include( SITE_PATH.'\view\\'.$filepath );
//        $template = ob_get_contents();
////        The ob_get_contents() function returns the contents of the topmost output buffer.
//        ob_end_clean();
//
//        echo $template;
//        }
//     }
 
}