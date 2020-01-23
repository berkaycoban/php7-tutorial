<?php

class A{
    private $x = 'A';
    private $y = 'B';
}

$value = function(){
    return $this->y;
};

print($value->call(new A));
