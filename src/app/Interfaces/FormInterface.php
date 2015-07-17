<?php 

namespace app\Interfaces;

use app\Interfaces\FormFieldInterface;

interface FormInterface
{	
	public function addElement(\app\Interfaces\FormFieldInterface $field);

	public function render();
}