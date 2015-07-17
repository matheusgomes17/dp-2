<?php 

namespace app\Form;
use app\Interfaces\SelectInterface;
use app\Interfaces\FormFieldInterface;

class Select implements SelectInterface, FormFieldInterface
{
	protected $values = array();

	public function getValue()
	{
		return $this->values;
	}

	public function addOptions($value)
	{
		$this->values[]	= $value;
	}

	public function getElement()
	{
		$select = "<div class=\"col-md-4\">\n<select class=\"form-control\">\n";
			foreach ($this->values as $key => $value) {
				$select .= "<option value='". $value ."'>". $value ."</option>\n";
			}
		$select .= "</select>\n</div>\n";
		return $select;
	}
}