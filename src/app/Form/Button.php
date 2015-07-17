<?php

namespace app\Form;
use app\Interfaces\ButtonInterface;
use app\Interfaces\FormFieldInterface;

class Button implements ButtonInterface, FormFieldInterface
{
	protected $type;
	protected $name;
	protected $value;
		
	public function __construct($type, $name, $value)
	{
		$this->type = $type;
		$this->name = $name;
		$this->value = $value;
	}

	public function setType($type)
	{
		$this->type = $type;
	}

    public function setName($name)
    {
    	$this->name = $name;
    }

    public function setValue($value)
    {
    	$this->value = $value;
    }

    public function getType()
    {
    	return $this->type;
    }

    public function getName()
    {
    	return $this->name;
    }

    public function getValue()
    {
    	return $this->value;
    }

    public function getElement()
    {
    	return "<button type='" . $this->type . "' name='" . $this->name . "' value='" . $this->value . "'>" . $this->value . "</button>";
    }
}