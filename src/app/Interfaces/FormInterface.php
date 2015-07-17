<?php 

namespace app\Interfaces;

use app\Interfaces\FormFieldInterface;

interface FormInterface
{	
	public function addElement(\app\Interfaces\FormFieldInterface $field);

	public function createField($field, $name, $value, $placeholder, $cols, $rows);

	public function render();
}
