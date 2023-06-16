@extends('layouts.app')

@section('content')
    <form action="{{ route('store') }}" method="post">
        @csrf
        <p>Your Email:</p>
        <input required type="text" name="email" id="email" value="">
        <input required type="text" name="subject" id="subject" value="">
        <input required type="text" name="information" id="information" value="">
        <button type="submit">Send</button>
    </form>
@endsection

