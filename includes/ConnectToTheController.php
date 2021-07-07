<?php
     include_once SITE_PATH . '\includes\RenderView.php';
     include_once SITE_PATH . '\includes\Statics.php';

     


class ConnectToTheController {

      static function connectAndRender($page, $action='', $router=''){
                       
     if( file_exists(SITE_PATH.'\application\\'.$page.'\Controller.php') ){
         
        include_once SITE_PATH.'\application\\'.$page.'\Controller.php';
//        $controllerPath = '\application\\'.$page.'\Controller.php'; //namespace
//        $controller = new $controllerPath( $page, $action, $router );

        $controller = new Controller( $page, $action, $router );
        
                
        RenderView::render( $controller->view(), $controller->datas() );
    }
    
         else
         {
            RenderView::render( Statics::$home_path );
         }
 
 }
}