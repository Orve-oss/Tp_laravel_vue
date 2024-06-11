<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $fillable = [
        'CodePdt',
        'DesignPdt',
        'ActifPdt',
        'PrixAchat',
        'PrixVente1',
        'PrixVente2'
    ];

    /*principe SOLID: S: tout doit se faire au niveau du model */

    protected $table = 'myproduit';//referencer la table
    protected $primaryKey = 'CodePdt'; //definir la clé primaire

    protected $keyType = 'string';// definir le type de la clé primaire

    public static function getAllproducts(){
        return Self::where('ActifPdt', 1)->get(); /*Self : pour referencer la table courante, remplace Produit::
            Cette ligne retourne les produits qui sont actifs*/
    }
}
