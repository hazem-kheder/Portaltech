<?php

if( !file_exists(__DIR__.'/composer.lock' ) )
{
    die( "Dependencies must be installed using composer:\n\nphp composer.phar install --dev\n\n"
        . "See http://getcomposer.org for help with installing composer\n" );
}
// Include the composer autoloader
include_once __DIR__.'/vendor/autoload.php';


//Database Configuration
$configuration = array(
    'db_dsn' => 'mysql:host=localhost;dbname=portaltech',
    'db_user' => "root",
    'db_pass' => "",
);

//My autoloading function in case you dont want to use Composer autoloading
/*
spl_autoload_register(function($className){

        //require_once __DIR__.'/lib/Service/BattleManager.php';

        $path =  __DIR__.'/lib/'.str_replace('\\', '/', $className).'.php';

        if(file_exists($path)){
            require $path;
        }
});
*/