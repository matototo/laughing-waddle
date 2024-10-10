@extends('master')
@section('title', 'Home')
@section('content')
<main>
<section class="hero">
     <picture><img src="{{ asset('img/race.jpg')}}" alt="Picture of a racetrack by Mateusz Dach" class="img-hero"></picture>
     </section>
 
@isset($data)
    <header class="title">
        <h2>Merci pour le message !</h2>
    </header>  
    <header class="header-page">
        <div class="container">
            <p><strong>Name:</strong> {{ $data?->name }}</p>
            <p><strong>Message:</strong> {{ $data?->message }}</p>
        </div>
    </header>
@else
<header class="title">
        <h2>Formulaire contactez-nous !</h2>
    </header>  
<form method="post">
    @csrf
    <div class="form-floating">
        <label for="name">Name</label>
        <input class="form-control" name="name" id="name" type="text" placeholder="Enter your name..." required />
        <!-- <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div> -->
    </div>
    <div class="form-floating">
        <label for="message">Message</label>
        <textarea class="form-control" name="message" id="message" placeholder="Enter your message here..." style="height: 12rem" required></textarea>
        <!-- <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div> -->
    </div>
    <!-- <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div> -->
    <button class="btn" type="submit">Send</button>
</form>
@endisset
</main>
@endsection('content')