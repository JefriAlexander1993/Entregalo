<?php

namespace App;

use App\Shopping;
// laravel includes

// app includes
use Validator;

/* Querys for Event Table
 */
class ShoppingModel{
    /* Get all Shoppings
     * @return Object Shoppings
     */
    public static function listShoppings(){

        $shoppings = Shopping::query();
        $shoppings->orderBy('id');

        return $shoppings->get();
    }

    /* save Shopping
     * @param type $data information from form
     * @return Object Shopping
     */
    public static function saveShopping($data){

        $Shopping = Shopping::create($data);
    
        return $Shopping;
    }
}