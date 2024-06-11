<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProduitListResource;
use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /*Resource: comme un filtre, DOM: noeuds qui décrit toutes les balises qui a sur une page html,
    tout ce qui est sur une page est un noeud,*/
    public function listProduit(){
        $listproduit = Produit::getAllproducts();
        return ProduitListResource::collection($listproduit);
    }
}
