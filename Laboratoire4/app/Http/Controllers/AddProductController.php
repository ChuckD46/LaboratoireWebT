<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Http\Controllers\ListProductController;

class AddProductController extends Controller
{
    public function show()
   {
       return view('AddProductView');
   }

   public function add(Request $request)
   {
       $newProduct = new Produit();

       $newProduct->nom = $request->input("nom");
       $newProduct->description = $request->input("description");
       $newProduct->quantite = $request->input("quantite");
       $newProduct->prix = $request->input("prix");
       $newProduct->fournisseur = $request->input("fournisseur");

       $newProduct->save();
       return redirect()->action(ListProductController::class);
   }
   
}
