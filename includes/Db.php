<?php
Class Db{
    
    private static $_mysqlObj;
    
    public static function connect()
    {
        if( !isset( self::$_mysqlObj ) )
        {
            $config = parse_ini_file( SITE_PATH . '/includes/config.ini' );
            // The parse_ini_file() function parses a configuration (ini) file and returns the settings.
 

            self::$_mysqlObj = new mysqli( $config['dbhost'], $config['dbuser'], $config['dbpass'], $config['dbname'], $config['dbport'] );
            //                new mysqli(host,               username,          password,          dbname,            port,              socket)
        
        }
        
        return self::$_mysqlObj;
    }
}