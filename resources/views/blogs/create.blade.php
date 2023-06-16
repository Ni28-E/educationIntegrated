@extends('layouts.visitorApp')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                {{--               form for creating and storing a new blog --}}

                <div class="p-2"></div>
                <div class="bg-opacity-10 border border-info">
                    <div style="background-color: lightslategrey;">
                        <h2 class="text-center">Add A Blog</h2>
                    </div>
                </div>
                <div class="bg-opacity-10 border border-info">
                    <div style="background-color: lightslategrey;">
                        <form class="p-2" action="{{ route('blogs.store')}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="blog_title" class="form-label">Blog title</label>
                                <input required type="text" class="form-control" name="blog_title" id="blog_title" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="blog_content" class="form-label">Blog content</label>
                                <input required type="text" class="form-control" id="blog_content" name="blog_content"  >
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
