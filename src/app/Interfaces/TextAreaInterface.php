<?php 

namespace app\Interfaces;

interface TextAreaInterface
{
	function setCols($cols);

    function setName($name);

    function setRows($rows);

    function setPlaceholder($placeholder);

    function getCols();

    function getName();

    function getRows();

    function getPlaceholder();
}