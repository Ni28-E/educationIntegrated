@extends('layouts.visitorApp')

@section('content')
    <div class="col py-3">
        <h3>Edit bars</h3>
        <table class="table">
            <thead>
            <tr>
{{--                shows all blogs from the database --}}
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Created at</th>
                <th scope="col">updated at</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>

            @foreach($blogs as $blog)
                <tr>
                    <td>{{ $blog->id }}</td>
                    <td>{{ $blog->title }}</td>
                    <td>{{ $blog->content }}</td>
                    <td>{{ $blog->created_at }}</td>
                    <td>{{ $blog->updated_at }}</td>
{{--                    button for editing a blog --}}
                    <td><a href="{{ route('blogs.edit', $blog->id) }}"><button>Edit</button></a></td>
                    <td>
{{--                        button for deleting a blog --}}
                        <form action="{{ route('blogs.destroy', $blog->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    </div>
    </div>
@endsection
