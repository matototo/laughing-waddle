@extends('master')
@section('title', 'Home')
@section('content')
@isset($data)
    <p><strong>Name:</strong> {{ $data?->name }}</p>
    <p><strong>Message:</strong> {{ $data?->message }}</p>
@else
<form method="post">
    @csrf
    <div class="form-floating">
        <input class="form-control" name="name" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
        <label for="name">Name</label>
        <!-- <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div> -->
    </div>
    <div class="form-floating">
        <textarea class="form-control" name="message" id="message" placeholder="Enter your message here..." style="height: 12rem" data-sb-validations="required"></textarea>
        <label for="message">Message</label>
        <!-- <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div> -->
    </div>
    <!-- <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div> -->
    <button class="btn btn-primary text-uppercase" type="submit">Send</button>
</form>
@endisset
@endsection('content')