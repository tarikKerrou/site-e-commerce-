<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\ Client;
use App\Models\ Produits;
use App\Models\GestionDesMessages;
class ClientController extends controller{
    
 
public function list(Request $request){
    
   // $id =  $request['id_client'];
    //$client = new Client();
    //return Redirect::route('list');

   // $listclients=$client->find($id);
    // redirection
    //return $id; 
    //return view("buy" );
}
public function buy(Request $request){ 
     $id_produit=  $request['id'];
  $fname=  $request['fname'];
    $lname =  $request['lname'];
    $dateNai=  $request['dateNai'];
    $email=  $request['email'];
    $NUM=  $request['NUM'];
    $dateEx=  $request['dateEx'];
    $client= new Client();
    $client->firstName = $fname ;
    $client->lastName =   $lname ;
    $client->dateNaissance =   $dateNai  ;
    $client->email=  $email ;
    $client->numCarteBancaire=  $NUM ;
    $client->dateExprie=  $dateEx ;
    $client->id_produit=$id_produit;
   $client->save();
    // redirection 
    //return view('buy');
    
}   
public function list1(){
    return view("client ");
}
public function save1(Request $request){
    $subject=$request['subject'];
    $message=$request['message'];
    $messages=new GestionDesMessages();
   $messages-> subject= $subject;
   $messages-> message= $message;
   //return "message saved Personne[ ".$subject .",".$message ;
   $messages->save();
    return view("About");
}
}