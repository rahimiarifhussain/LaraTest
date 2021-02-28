@extends('template.app')
@section('content')
    <div class="container">
        <div class="row">
            <h4 class="text-primary " style="text-align:center"><a href="{{ route('posts.create')}}">Create Posts</a></h4>
        </div>
        <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-10">
            <table class="table table-light">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                </tr>
                <tbody>
                    @foreach ($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->description}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-2"></div>
    </div>
            </div>

    </div>

@endsection