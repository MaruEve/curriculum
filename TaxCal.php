<?php

class tax{
    public $price = 3187;
    
    function taxout(){
        echo $this->price-$this->price*0.1 .PHP_EOL;
    }
}

$tax_1 = new tax;
$tax_1 -> taxout();
