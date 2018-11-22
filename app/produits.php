<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class produits extends Model
{

    public $fillable = ['title','categorie','description','prixProduit'];

}