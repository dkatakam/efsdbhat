@extends('app')
@section('content')
    <h1>Update Asset</h1>
    {!! Form::model($asset,['method' => 'PATCH','route'=>['assets.update',$asset->id]]) !!}
       <div class="form-group">
        {!! Form::label('symbol', 'Symbol:') !!}
        {!! Form::text('symbol',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('assetname', 'Asset Name:') !!}
        {!! Form::text('assetname',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('assets', 'Assets:') !!}
        {!! Form::text('assets',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('acquired_price', 'Acquired Price:') !!}
        {!! Form::text('acquired_price',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('purchase_date', 'Purchase Date:') !!}
        {!! Form::text('purchase_date',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Eagle Financial</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

</head>
<body>
<div class="container">
    <a href="{{ action('CustomerController@index') }}">Customers</a> |
    <a href="{{ action('StockController@index') }}">Stocks</a> |
    <a href="{{ action('InvestmentController@index') }}">Investments</a>
</div>
<hr>
<div class="container">
    @yield('content')
</div>
</body>
</html>
