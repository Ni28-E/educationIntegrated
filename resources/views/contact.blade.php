@extends('layouts.visitorApp')

@section('content')
<br>
                <form action="{{ route('store') }}" method="post" id="email">
                @csrf
                <label for="email" class="form-label">Your Email </label>
                <input required type="text" name="email" id="email" value="">
                <label for="subject" class="form-label">Subject </label>
                <input required type="text" name="subject" id="subject" value="">
                <!--<input required type="text" name="information" id="information" value="">-->
                <button type="submit">Send</button>
                </form>
                <textarea rows="4" cols="50" name="information" form="email" id="information">Enter text here...</textarea>



@endsection

