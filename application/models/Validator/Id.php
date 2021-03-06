<?php
class Application_Model_Validator_Id extends Custom_InputData_Abstract
{
  public function initValidators()
  {
    $this->addValidators('id', array(
      new Custom_Validate_Id()
    ), true);
  }
  
  public function initFilters()
  {
    $this->addFilters('id', array(
      new Zend_Filter_Int()
    ));
  }  
}