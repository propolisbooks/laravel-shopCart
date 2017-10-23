<?php

namespace App\Http\Controllers;
// prikljucili smo model Product.php
use App\Product;
use Illuminate\Http\Request;



class ProductController extends Controller
{
    public function getIndex(){
        //izlistavamo sve proizvode
    	$products = Product::all();
    	 // prikazujemo stranu /shop/index.blade.php

    	 /*                         (1)         (2)   */
    	return view('shop.index',['products'=>$products]);

    	/*
        *  1) Kreira se nova varijabila products koju cemo koristiti
              u view-u sa kako $products
    	*/
    }
}
