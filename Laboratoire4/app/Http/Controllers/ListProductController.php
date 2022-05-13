<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class ListProductController extends Controller
{
   public function __invoke()
   {
        return view('ListProductView', ["produits"=>Produit::all()]);
   }
}
