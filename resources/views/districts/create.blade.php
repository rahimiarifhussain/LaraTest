@extends('template.app')
@section('content')
    <div class="container">
        <form action="{{ route('districts.store') }}" method="POST">
            @include('districts.partial.form')
            <button type="submit">Save </button>
        </form>
    </div>
@endsection