@extends('layouts/app')

@section('content')
        
<h1>Shopping Cart</h1>

<p>Name: {{$product->name}} , Describe: {{$product->desc}} , Category: {{$product->category}} 
        , Price: {{$product->pricelist}}  , Quantity: {{$product->quantityInStock}} </p>

        {!! Form::open(array('action' => 'SaleItemController@store')) !!} 

        {{ Form::label('quantity', 'How many do you want?')}} 
        {{ Form::number('quantity', '') }}

        {{ Form::hidden('productId', $product->productId ) }}
        
        {{ Form::submit('submit',  ['class'=>'btn btn-primary']) }}

        {!! Form::close() !!}

@endsection 

