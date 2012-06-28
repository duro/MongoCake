<?php

App::uses('ModelValidator', 'Model');

/**
* An extension of the ModelValidator class to handle validation of a CakeDocument
*/
class CakeDocumentValidator extends ModelValidator
{
    
/**
 * Holds the reference to the model this Validator is attached to
 *
 * @var CakeDocument
 */
	protected $_model = array();
    
  public function __construct(CakeDocument $Model) {
		$this->_model = $Model;
	}
}
