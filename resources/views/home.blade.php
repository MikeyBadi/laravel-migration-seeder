@extends('layout.main')

@section('content')

<h1>home</h1>

@foreach ($trains as $train)

<p>Compagnia: <b>{{$train->company}}</b></p>
<p>Partenza: <b>{{$train->departures}}</b></p>
<p>Arrivo: <b>{{$train->arrivals}}</b></p>
<p>Orario Partenza: <b>{{$train->departure_time}}</b></p>
<p>Orario stimato arrivo: <b>{{$train->arrival_time}}</b></p>
<p>Codice treno: <b>{{$train->train_code}}</b></p>
<p>Codice carrozza: <b>{{$train->coach}}</b></p>
<hr>
@endforeach

@endsection
