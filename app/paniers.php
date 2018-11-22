<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class paniers extends Model
{

    public $fillable = ['emailClient','nomProduit','categorieProduit','descriptionProduit','prixProduit'];

}