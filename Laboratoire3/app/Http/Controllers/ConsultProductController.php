<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class ConsultProductController extends Controller
{
    public function __invoke($id)
   {
       $product = Produit::where('id', $id)->firstOrFail();
       return view('ConsultProductView', ["produit"=>$product]);
   }
}
