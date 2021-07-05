<?php
     include_once SITE_PATH . '\includes\RenderView.php';
     include_once SITE_PATH . '\includes\Statics.php';

     


class ConnectToTheController {

      static function connectAndRender($page, $action='', $router=''){
                       
     if( file_exists(SITE_PATH.'\application\\'.$page.'\Controller.php') )
     
    {
         
        include_once SITE_PATH.'\application\\'.$page.'\Controller.php';
        $controllerPath = '\application\\'.$page.'\Controller'; //namespace

        $controller = new $controllerPath( $page, $action, $router );
        
        //We're rendering the content inside page.php (at the first step), which is ($page:articles_list AND $action:details)
        RenderView::render( $controller->view(), $controller->datas() );
    }
    
         else
         {
            RenderView::render( 'home.php' );
         }
 
 }
}