<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Produits;


class ProduitController extends Controller
{
    // actions 

    public function index(){

        return view('produit');

    }
    public function save(Request $request){

        // recuperation des params de puis le formulaire
        
                $image=  $request['image'];
                $nom =  $request['nom'];
                $prix=  $request['prix'];
                $description=  $request['description'];
               
        
            
                // Tinker et model
                $produit = new Produits();
        
                $produit->image = $image ;
                $produit->nom =   $nom ;
                $produit->prix =   $prix  ;
                $produit->description=  $description ;
                
                
               $produit->save();
                // redirection 
        //return "Personne saved Personne[ ".$image .",".$nom .",".$prix .",".$description."]" ;
        //return Redirect::route('Home',['image'=>$image ,'nom'=>$nom , 'prix'=>$prix,'description'=>$description  ] );
        return Redirect::route('list');
       // return view('home');
}
public function Home(Request $request){
    $image =  $request['image'];
    $nom =  $request['nom'];
    $prix =  $request['prix'];
    $description =  $request['description'];
    

      
    // redirection 
    return view("Home" ,['image'=>$image ,'nom'=>$nom , 'prix'=>$prix,'description'=>$description  ]);

}
public function list(Request $request){
    $produit = new Produits();
    $listproduits = $produit::all();

   
    // redirection 
    return view("Home" , ['listp'=>$listproduits] );

}
public function detele(Request $request){

    $id =  $request['id'];
    $produit = new Produits();

    $produit->find($id)->delete();

    return Redirect::route('list');
}
}
