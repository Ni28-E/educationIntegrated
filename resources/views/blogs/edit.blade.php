@extends('layouts.visitorApp')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
{{--                form in which you can edit a bar which sends it to the bars.update function --}}
                <form action="{{ route('blogs.update', $blog->id) }}" method="post">
                    @csrf
                    @method('patch')

                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Database field name</th>
                            <th scope="col">Database value</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
{{--                            name, address and id can be changes --}}
{{--                            it will already fill in the current values from the database --}}
                            <td><label for="title">Blog title</label></td>
                            <td> <input type="text" name="title" id="title" value="{{ $blog->title }}"></td>
                        </tr>
                        <tr>
                            <td>  <label for="content">Content</label></td>
                            <td>  <input type="text" name="content" id="contente" value="{{ $blog->content }}"></td>
                        </tr>

                        </tbody>
                    </table>
                    <button type="submit">Edit</button>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
