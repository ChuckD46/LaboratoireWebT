<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class ModifyProductController extends Controller 
{
    public function show($id)
   {
       return view('ModifyProductView', ["produit"=>Produit::where('id', $id)->firstOrFail()]);
   }

   public function modify($id, Request $request)
   {
       $product = Produit::find($id);

       $product->nom = $request->input("nom");
       $product->description = $request->input("description");
       $product->quantite = $request->input("quantite");
       $product->prix = $request->input("prix");
       $product->fournisseur = $request->input("fournisseur");
       
       $product->save();
       echo $product;
       return redirect()->action(ListProductController::class);
   }
}
