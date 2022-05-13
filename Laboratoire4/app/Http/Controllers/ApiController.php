<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function PHPUnit\Framework\isJson;
use function PHPUnit\Framework\returnSelf;
use App\Models\Produit;
use phpDocumentor\Reflection\Types\Null_;

class ApiController extends Controller
{
    

    public function apiAddProduct(Request $request)
    {
        $newProduct = new Produit();
    
        $newProduct->nom = $request->input("nom");
        $newProduct->description = $request->input("description");
        $newProduct->quantite = $request->input("quantite");
        $newProduct->prix = $request->input("prix");
        $newProduct->fournisseur = $request->input("fournisseur");
    
        $sauvegarde = $newProduct->save();

        if(!$sauvegarde){
            $message = "Une erreur est survenue";
        }
        else{
            $message = "Produit enregistrer avec succes";
        }

        return $message;
    }

    public function apiListProduit()
    {
        return response()->json(["produits"=>Produit::all()]);
    }

    public function apiDetailProduit($id)
    {
        return Produit::where('id', $id)->firstOrFail();
    }

    public function apiModifierProduit($id, Request $request)
    {
        $product = Produit::find($id);
        
        if($product==NULL){
            $message = "Produit introuvable";
        }
        else{
            $product->nom = $request->input("nom");
            $product->description = $request->input("description");
            $product->quantite = $request->input("quantite");
            $product->prix = $request->input("prix");
            $product->fournisseur = $request->input("fournisseur");
            
            $sauvegarde = $product->save();

            if(!$sauvegarde){
                $message = "Une erreur est survenue";
            }
            else{
                $message = "Modification enregistrer avec succes";
            }
        }
        
        return $message;
    }
    
    public function apiSuppProduit($id)
    {
        $product = Produit::find($id);

        if($product==NULL){
            $message = "Produit introuvable";
        }
        else{
            $product->delete();
            $message = "Produit supprimer avec succes";
        }

        return $message;
    }

    public function apiQuantiteProduit($id, $quantite)
    {
        $product = Produit::find($id);

        if($product==NULL){
            $message = "Produit introuvable";
        }
        else{
           $product->quantite = $quantite;

           $sauvegarde = $product->save();

           if(!$sauvegarde){
               $message = "Une erreur est survenu";
           }
           else{
               $message = "Quantité modifier avec succes";
           }
        }

        return $message;
    }

}
