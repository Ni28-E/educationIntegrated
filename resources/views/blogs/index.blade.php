@extends('layouts.visitorApp')

@section('content')

    <link rel="stylesheet" href="{{ URL::asset('css/blog.css') }}">

    <div class="container">
        <div class="row justify-content-center">
{{--                displays all blogs using bootstrap cards --}}


            <div class="row">
                <div class="left-column">
                    @foreach($blogs as $blog)
                    <div class="card">

                        <img src="images/motivate.jpg"width="500" height="350">
                        <h2>{{ $blog->title }}</h2>
                        <br><br>
                        <p>{{ $blog->content }}</p>
                        <br>
                    </div>
                    @endforeach

                </div>


                <div class="right-column">


                    <div class="card">
                        <h3>Popular Post</h3>
                        <br>
                        <h2>Title</h2>
                        <img src="image/update.jpeg"width="300" height="200">
                        <h2>Title</h2>
                        <img src="image/update.jpeg"width="300" height="200">
                        <h2>Title</h2>
                        <img src="image/update.jpeg"width="300" height="200">


                    </div>


                </div>
            </div>




        </div>
        </div>
@endsection
