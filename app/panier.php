<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class panier extends Model
{

    public $fillable = ['emailClient','nomProduit','categorieProduit','descriptionProduit','prixProduit'];

}