<?php 
/**
 * Soleil - Framework for web development 
 *  
 * @version     0.1  
 * @license     GNU/GPL
 * @license     https://www.gnu.org/licenses/licenses.en.html GNU General Public License
 * @author      David Gonzalez Gonzalez <dev@dggonzalez.com>
 * @copyright   GNU/GPL@2018 
 */ /*! \mainpage */

 try
 {
    if ( @!include('soleil/autoload.php' ) ) 
        throw new Exception('Soleil : FATAL ERROR : Autoload not found.');
 } 
 catch (Exception $e) 
 {
    echo "Exception capture: <pre>{$e->getMessage()}</pre>";
 }
 \soleil\api\php\Tools::foo(1);