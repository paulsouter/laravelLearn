@extends('layouts/app')

@section('content')
        
        <h1>Add Porduct</h1>
        {!! Form::open(array('action' => 'ProductController@store')) !!} 
        <div class='form-group'>
        {{ Form::label('Name', 'Name')}} 
        {{ Form::text('name', '', ['class'=>'form-control']) }}
        </div>
        <div class='form-group'>
        {{ Form::label('Desc', 'Desc')}} 
        {{ Form::text('desc', '',  ['class'=>'form-control'] ) }}
        </div>
        <div class='form-group'>
        {{ Form::label('Category', 'Category')}} 
        {{ Form::text('category', '',  ['class'=>'form-control'] ) }}
        </div>
        <div class='form-group'>
                {{ Form::label('PriceList', 'Price')}} 
                {{ Form::number('priceList', '',  ['class'=>'form-control']) }}
                </div>
        <div class='form-group'>
        {{ Form::label('QuantityInStock', 'Quantity In Stock')}} 
        {{ Form::number('quantityInStock', '',  ['class'=>'form-control']) }}
        </div>
        {{ Form::submit('submit',  ['class'=>'btn btn-primary']) }}

        {!! Form::close() !!}


@endsection 

