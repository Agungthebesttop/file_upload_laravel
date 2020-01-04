<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
class Products extends Controller
{
    public function save()
    {
      return Product:all();
    }
}
