<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class admins extends Model
{

    public $fillable = ['title','categorie','description','prixProduit'];

}