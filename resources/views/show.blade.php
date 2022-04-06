@section('content')

<h1>  bienvenu a NOTRE PRODUITES </h1>

<th> ID </th>
<th> Image </th>
<th> Nom </th>
<th> prix </th>
<th> description </th>
<th> buy </th>

@foreach($listp as $produit)
<tr>
<td>{{$produit['id']}}</td>
<td>{{$produit['image']}}</td>
<td>{{$produit['nom']}}</td>
<td>{{$produit['prix']}}</td>
<td>{{$produit['description']}}</td>
<td><a href="/delete?id={{$produit['id']}}">delete</a></td>
<td></td>
<tr>
@endforeach

@endsection
