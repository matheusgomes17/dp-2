<?php 

namespace app\Interfaces;

interface InputInterface
{
    function setType($type);

    function setName($name);

    function setValue($value);

    function setPlaceholder($placeholder);

    function getType();

    function getName();

    function getValue();

    function getPlaceholder();
}