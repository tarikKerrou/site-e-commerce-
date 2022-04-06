@extends('layout') 
@section('title')AddProduits @endsection
 @section('content')
 <h1>hello there ici pour les produit</h1>
 <form action="/save" method="get">
     <h3>enter image  :</h3> <input type="text" name ="image"></br>
     <h3>enter nom de produis :</h3> <input type="text" name ="nom"></br>
     <h3>enter prix  :</h3> <input type="numbeer" name ="prix"></br>
     <h3>enter description  :</h3> <input type="text" name ="description"></br>
     
     <input  type="submit" name="save" value="save" />
 </form>
 @endsection