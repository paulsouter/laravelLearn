@extends('layouts/app')

@section('content')  

        <h1>Products</h1>
       @if(count($products) >0)
                @foreach ($products as $product)
                    <div class='card'>
                            <p>{{$product->name}} {{$product->desc}} {{$product->category}} 
                                 {{$product->pricelist}}  {{$product->quantityInStock}} 
                                 <a href='products/{{$product->productId}}' class="btn btn-default">add to cart</a></p>
                    </div>
                @endforeach
       
               
       @else
               <p>No products found</p>
       @endif

@endsection 

