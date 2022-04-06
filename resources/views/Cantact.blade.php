@extends('layout')
@section('title') 
CantactUs
@endsection 
 @section('content')  <h1>Contact Us.</h1> 
  <p>Please contact us by sending a message using the form below:</p> 
  <form action="\envoyer"method="get">
<h3>Subject :</h3> <input type="text" name='subject'>
<h3>message :</h3> <input type="text" name='message'>
<h3>envoyer :</h3> <input type="submit" name='envoyer'>
</form>
  @stop