<?php

class RenderView {
    
     
     static function render($view_path, $datas=''){
         //To render simply means: To include the related page
         
  if( file_exists( SITE_PATH.'\view\\'.$view_path ) && is_readable( SITE_PATH.'\view\\'.$view_path ) )
        {
        //ob: output buffering : Output Buffering is a method to tell the PHP engine to hold the output data before sending it to the browser.
        ob_start();
        include( SITE_PATH.'\view\\'.$view_path );
        $view = ob_get_contents();
        //The ob_get_contents() function returns the contents of the topmost output buffer.
        ob_end_clean();  
        //we finally free the memory.

        echo $view;
        }
     }
}
