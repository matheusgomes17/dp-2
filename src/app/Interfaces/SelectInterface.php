<?php 

namespace app\Interfaces;

interface SelectInterface
{
    function getValue();

    function addOptions($value);
}