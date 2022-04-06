@extends('layout') 
@section('title')formulaire Client
@endsection
 @section('content')
 <h1>hello there ici pour les client </h1>
 <form action="/saveClient" method ="get">
 <h3>nom :</h3> <input type="text" name ="fname"></br>
     <h3>prenom :</h3> <input type="text" name ="lname"></br>
     <h3>date naissance  :</h3> <input type="date" name ="dateNai"></br>
     <h3>email :</h3> <input type="text" name ="email"></br>
     <h3>num carteBancaire :</h3> <input type="text" name ="NUM"></br>
     <h3>date expire cartBancaire :</h3> <input type="date" name ="dateEx"></br>
     <h3>enter id of product  :</h3> <input type="number" name ="id"></br>
     
     ><input type="submit" name="save" value="saveClient" />
     </form>
 @endsection