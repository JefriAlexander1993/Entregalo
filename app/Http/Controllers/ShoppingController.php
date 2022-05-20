<?php

namespace App\Http\Controllers;

use App\ShoppingModel;
use App\Http\Requests\ShoppingRequest;
use Illuminate\Http\Request;

class ShoppingController extends Controller
{
    public function index(){
        $shoppings = ShoppingModel::listShoppings();
        return view('shopping.index', compact('shoppings'));
    }
    public function create()
    {
       
        return view('shopping.form');
    }
    public function store(ShoppingRequest $request)
    {
        $data =$request->all();
     
        ShoppingModel::saveShopping($data);

        return redirect()->route('listShoppings');
    }
}
