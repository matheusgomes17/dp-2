<?php 

namespace app\Interfaces;

interface ButtonInterface
{
	function setType($type);

    function setName($name);

    function setValue($value);

    function getType();

    function getName();

    function getValue();
}