@extends('template.app')
@section('content')
    <div class="container">
        <div class="row">
            <h4 class="text-primary " style="text-align:center"><a href="{{ route('employees.create')}}">Create Employee</a></h4>
        </div>
        <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-10">
            <table class="table table-light">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Pirthof Place</th>
                </tr>
                <tbody>
                    @foreach ($employees as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->name}}</td>
                        <td>{{$post->find($post->id)->province->name}}</td>
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