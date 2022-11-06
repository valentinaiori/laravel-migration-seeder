@extends('layout/layout')
@section('main')
<h1>Trains</h1>
@foreach ($trains as $train)
<div>
    <h5>Codice treno:</h5>
    <p>{{ $train['codice_treno'] }}</p>
    <h5>Data di partenza:</h5>
    <p>{{ $train['data_di_partenza'] }}</p>
</div>



@endforeach
@endsection
