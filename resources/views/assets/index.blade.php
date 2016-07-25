@extends('app')

@section('content')
    <h1>Asset</h1>
    <a href="{{url('/assets/create')}}" class="btn btn-success">Create Asset</a>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>Cust No</th>
            <th>Cust Name</th>
            <th>Symbol</th>
            <th>Asset Name</th>
            <th>Assets</th>
            <th>Acquired price</th>
            <th>Purchased Date</th>
            <th colspan="3">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($assets as $asset)
            <tr>
                <td>{{ $asset->customer->cust_number }}</td>
                <td>{{ $asset->customer->name }}</td>
                <td>{{ $asset->symbol }}</td>
                <td>{{ $asset->assetname }}</td>
                <td>{{ $asset->assets }}</td>
                <td>{{ $asset->acquired_price }}</td>
                <td>{{ $asset->purchase_date }}</td>
                <td><a href="{{url('assets',$asset->id)}}" class="btn btn-primary">Read</a></td>
                <td><a href="{{route('assets.edit',$asset->id)}}" class="btn btn-warning">Update</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['assets.destroy', $asset->id]]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>
@endsection
