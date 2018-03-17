<?php 
/**
 * Soleil - Framework for web development 
 * 
 * @author David González <dev@dggonzalez.com>
 * @version 0.1
 * 
 */ /*! \mainpage */

 try
 {
    if ( @!include('soleil/autoloafd.php' ) ) 
        throw new Exception('Soleil : FATAL ERROR : Autoload not found.');
 } 
 catch (Exception $e) 
 {
    echo "Exception capture: <pre>{$e->getMessage()}</pre>";
 }