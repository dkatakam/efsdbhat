@extends('app')
@section('content')
    <h1>Create New Asset</h1>
    {!! Form::open(['url' => 'assets']) !!}

       <div class="form-group">
        {!! Form::select('customer_id', $customers) !!}
    </div>

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
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop
