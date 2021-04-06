<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Product;

class CatalogoController extends Controller
{
    public function index()
    {
        
        $products = Product::all();
    
        return view('catalogo', compact('products'));
    }
  

 
   public function show(Product $product)
   {
       //
       return view('products.show', compact('product'));

       
   }


}



