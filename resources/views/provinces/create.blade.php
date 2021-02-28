@extends('template.app')
@section('content')
    <div class="container">
        <form action="{{ route('provinces.store') }}" method="POST">
            @include('provinces.partial.form')
            <button type="submit">Save </button>
        </form>
    </div>
@endsection