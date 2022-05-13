<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Produit;
USE App\Models\User;

class ApiTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_AjoutProduit()
    {

        $user = User::factory()->create();
        
        $response = $this->withBasicAuth($user)                         
                         ->postJson('/api/Produit/Ajout',[
            "nom" => "ntest",
            "description" => "dtest",
            "fournisseur" => "ftest",
            "image" => null,
            "prix" => "4.00",
            "quantite" => 11
        ]);
        
        $response->assertStatus(401);

    }
    
    public function test_ModifierProduit()
    {

        $user = User::factory()->create();
        
        $response = $this->withBasicAuth($user)                         
                         ->putJson('/api/Produit/{id}',[
            "nom" => "Modifntest",
            "description" => "dtest",
            "fournisseur" => "ftest",
            "image" => null,
            "prix" => "5.00",
            "quantite" => 11
        ]);
        
        $response->assertStatus(401);

    }

    public function test_SuppProduit()
    {

        $user = User::factory()->create();
        
        $response = $this->withBasicAuth($user)                         
                         ->deleteJson('/api/Produit/{id}');
        
        $response->assertStatus(401);

    }
}
