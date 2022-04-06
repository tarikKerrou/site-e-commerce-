<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstName',
        'lastName',
        'dateNaissance',
          'email',
          'numCarteBancaire',
          'dateExprie',
        
        ];
          protected $casts = [
              'email_verified_at' => 'datetime',
          ];
          function produits(){


            return $this->belongsToMany(produits::class);
        }
}
