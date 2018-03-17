<?php 
/**
 * Soleil - Framework for web development 
 *  
 * @version     0.1  
 * @license     GNU/GPL
 * @license     https://www.gnu.org/licenses/licenses.en.html GNU General Public License
 * @author      David Gonzalez Gonzalez <dev@dggonzalez.com>
 * @copyright   GNU/GPL@2018 
 */
 
spl_autoload_register( function ( $_strClass )
{
	$__strVendorPath =
		( version_compare( PHP_VERSION, '5.3.0' ) == -1 ) ?
			dirname( __FILE__ ) :
			__DIR__;

	$__strClassFile =
		str_replace( '\\', DIRECTORY_SEPARATOR,  $_strClass ) . '.php' ;

	$__strFile =
        $_SERVER['DOCUMENT_ROOT']  . '/' . $__strClassFile ;
        
    if ( file_exists( $__strFile ) ) 
    {  
		require_once ( $__strFile );
	}
});
