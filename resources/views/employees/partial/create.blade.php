@include('template.app')
@section("content")
b:<div class="jumbotron">
    <h1 class="display-4">Add Employee</h1>
    <p class="lead">Employees</p>
    <hr class="my-4">
    <p>Content</p>
    <form action="{{ route('employees.store')}}" method="POST">
        @include('employees.partial.form')
        <button type="submit">Save</button>
    </form>
</div>
@endsection