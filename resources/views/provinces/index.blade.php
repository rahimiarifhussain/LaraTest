@extends('template.app')
@section('content')
    <div class="container">
        <div class="row">
            <h4 class="text-primary " style="text-align:center"><a href="{{ route('provinces.create')}}">Create Province</a></h4>
        </div>
        <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-10">
            <table class="table table-light">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>action</th>
                </tr>
                <tbody>
                    @foreach ($provinces as $province)
                    <tr>
                        <td>{{$province->id}}</td>
                        <td>{{$province->name}}</td>
                        <td>
                            <a href="{{ route('provinces.edit', $province->id)}}">Edit</a>
                            <button type="submit" onclick="event.preventDefault(); deleteProvince();">Delete</button>
                            <form id="delete-province-{{$province->id}}-form" action="{{route("provinces.destroy", $province->id)}}" method="post" style="display:none;">
                                @csrf 
                                @method("Delete")
                            </form>
                        </td>
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