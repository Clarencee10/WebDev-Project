@extends('layout') 

@section('content')
    <p><strong>Name:</strong>{{ $dataReceived['name'] }}</p>
    <p><strong>Email:</strong>{{ $dataReceived['email'] }}</p>
    <br>
    <h2>Message</h2>
    {{ $dataReceived['message'] }}
@endsection 