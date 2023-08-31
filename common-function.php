<?php

class codemanbd{

    var $productName = "Laptop";
    // public
    // private
    // protected
    public function product_calculation($product_price=0, $product_qty=0){
    
        return $product_price*$product_qty;
    }
}

?>