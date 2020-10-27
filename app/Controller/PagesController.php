<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link https://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array();

/**
 * Displays a view
 *
 * @return CakeResponse|null
 * @throws ForbiddenException When a directory traversal attempt.
 * @throws NotFoundException When the view file could not be found
 *   or MissingViewException in debug mode.
 */
	public function home () {

	    
	    
	}
	
	public function result(){
	    
	    $this->layout = 'ajax';
	    $string = file_get_contents("./files/keywords.json");
	    $json_results = json_decode($string, true);
	    $result_array = array();
	    $findme   = $_POST['word'];
	    if( $_POST['word'] != '' ){
	        foreach( $json_results as $json_result ){
	            
	            
	            //Concatenar los 3 Strings
	            $mystring = ' '.$json_result['name'].' '.$json_result['city'].' '.$json_result['state'];
	            
	            //Busca la palabra en el String con la funcion stripos de php
	            
	            $found = stripos($mystring,$findme);
	            
	            //Compara si viene vacia si no esta vacia lo agrega al array
	            if( $found !=  '' ){
	                array_push($result_array, $json_result);
	            }
	        }
	    }
	    
	 
	    $this->set('results', $result_array);
	    
	}
	
}
