<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;

class Produits extends Model
{
    use HasFactory;
    protected $fillable = [
         'image',
            'nom',
            'prix',
            'description',
            'description',
             'id_produit',];
            
            function client(){


                return $this->belongsToMany(clients::class);
            }
}
