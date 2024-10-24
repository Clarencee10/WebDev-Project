@extends('layout') 

@section('content')

@if(session('flash'))
  <p style="color: lawngreen">{{ session('flash') }}</p>
@endif

<h1>WebDev Contact Form</h1>
<form class="cf" id="contactForm">
  @csrf
  <div class="half left cf">
    <input type="text" id="input-name" placeholder="Name" name="name">
    <input type="email" id="input-email" placeholder="Email address" name="email">
    <input type="text" id="input-subject" placeholder="Subject" name="subject">
  </div>
  <div class="half right cf">
    <textarea name="message" type="text" id="input-message" placeholder="Message"></textarea>
  </div>
  <input type="submit" value="Submit" id="input-submit">
</form>
@endsection