<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class StoreController extends Controller
{
    public function getProducts(){
        return Products::select('products.*', 'categories.name as category_name')->join('categories', 'categories.id', '=', 'products.category_id')->get();
    }
}
