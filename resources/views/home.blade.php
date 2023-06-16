@extends('layouts.visitorApp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

        </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="items">
        <div class="item first">

            <h1>
                About
            </h1>
            <p>
                Content Will be added soon
            </p>
            <button><a href="{{ route ('about') }}">read more</a></button>
        </div>


        <div class="item second">
            <h1>
                Blog
            </h1>
            <p>
                blog Info Will be added soon
            </p>
            <button><a href="{{ route ('blog') }}">read more</a></button>
        </div>


        <div class="item third">
            <h1>
                Newsletter
            </h1>
            <p>
                Content Will be added soon
            </p>
            <button><a href="{{ route ('home') }}">read more</a></button>
        </div>
    </div>
</div>
</div>


<footer>
    <p></p>
</footer>
@endsection
