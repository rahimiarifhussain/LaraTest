@extends('template.app')
@section('content')
    <div class="container">
        <form action="{{ route('employees.store') }}" method="POST">
            @include('employees.partial.form')
            <button type="submit">Save </button>
        </form>
    </div>
@endsection