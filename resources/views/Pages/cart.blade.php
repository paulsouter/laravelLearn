@extends('layouts/app')

@section('content')
        
<h1>Shopping Cart</h1>

<p>{{$product->name}} {{$product->desc}} {{$product->category}} 
        {{$product->pricelist}}  {{$product->quantityInStock}} 
        <form>
                <label>How many do you want:</label>
                <input type="number"></p>
@endsection 

