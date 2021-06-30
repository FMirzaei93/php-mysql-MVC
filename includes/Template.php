<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Template
 *
 * @author Firoozeh.Mirzaei
 */
class Template {
    
    
    function __construct() {
        self::_render( 'page', $urlInfos );
    }


    
    public static function page( $urlInfos )
 {
 // Déclenche l'assemblage avec le rendu de la page principale.
 }

 private static function _includeInTemplate($page, $action='', $router='')
 {
 // Opère les inclusions des modules et transmet pour le rendu
     
     if( file_exists(SITE_PATH.'/application/'.$page.'/Controller.php') )
    {
        include_once SITE_PATH.'/application/'.$page.'/Controller.php';

        $controllerPath = '\application\\'.$page.'\Controller'; //nspace

        $controller = new $controllerPath( $page, $action, $router );

        self::_render( $controller->view(), $controller->datas() );
    }
    
         else
         {
            self::_render( 'home' );
         }
 
 }

 private static function _render($filepath, $datas='')
 {
//     The rendering operation consists of integrating the data into the view and then displaying the result.
 //The _render () method combines the information that is the names of the views and the data to be displayed in the views
//  In order to do this, the use of the buffer will be required. The ob_start () functions, ob_get_contents () and ob_end_clean () respectively allow to call 
//          the buffer memory, recover data in memory and finally free the memory.
             
  if( file_exists( SITE_PATH.'/view/'.$filepath.'.php' ) && is_readable( SITE_PATH.'/view/'.$filepath.'.php' ) )
        {
        ob_start();
        require( SITE_PATH.'/view/'.$filepath.'.php' );
        $template = ob_get_contents();
        ob_end_clean();

        echo $template;
        }
     }
 
}
