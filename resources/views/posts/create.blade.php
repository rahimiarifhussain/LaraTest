@extends('template.app')
@section('content')
    <div class="container">
        <form action="{{ route('posts.store') }}" method="POST">
            @include('posts.partial.form')
            <button type="submit">Save </button>
        </form>
    </div>
@endsection