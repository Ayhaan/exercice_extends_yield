@extends('layouts.index')

@section('content')
    <h1>{{env('APP_NAME')}}</h1>
    <h3>{{env('APP_SLOGAN')}}</h3>
    @include('partials.cards')
@endsection