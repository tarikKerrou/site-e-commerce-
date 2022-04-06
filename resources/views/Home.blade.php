@extends('layout')
@section('title') HOME   
@endsection
 @section('content') 
 <h1>  bienvenu a NOTRE PRODUITES </h1>

 

@foreach($listp as $produit)



<div class="card" style="width: 18rem;;float: right;padding: 10px;margin-left: 10px;">
  <img class="card-img-top"style=" height: 150px; " src="{{$produit['image']}}" alt="Card image cap">
  <div class="card-body"style="width=200px;height: 300px;">
    <p class="card-title"style="width=50px;"><h5>{{$produit['nom']}}</h5></p>
    <p class="card-text"style="width=200px;">{{$produit['description']}}</p>
    <p >{{$produit['prix']}}$</p>
    <a href="/buy?id={{$produit['id']}}" class="btn btn-primary">buy</a>
  </div>
</div>



@endforeach
         @endsection
