@extends('master')
@section('title', 'Home')
@section('content')
<main>
@isset($data)
    <div class="container">
        <p><strong>Name:</strong> {{ $data?->name }}</p>
        <p><strong>Message:</strong> {{ $data?->message }}</p>
    </div>
@else
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