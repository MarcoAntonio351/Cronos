<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    public function getAllOrderByName(Request $request){
        $produtos = Products::orderBy('nome')->get();
        return $produtos;
    }
}
