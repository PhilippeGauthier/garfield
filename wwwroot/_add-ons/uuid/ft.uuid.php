<?php
require_once 'vendor/autoload.php';
use Webpatser\Uuid\Uuid;
class Fieldtype_uuid extends Fieldtype
{
  public function render_field()
    {
    	$uuid = $this->field_data ?: Uuid::generate(4);
			return '<input type="hidden" name="'.$this->fieldname.'" value="'.$uuid.'"/>';
    }
}