@include('template.app')
@section("content")
b:<div class="jumbotron">
    <h1 class="display-4">Add Post</h1>
    <p class="lead">posts</p>
    <hr class="my-4">
    <p>Content</p>
    <form action="{{ route('posts.store')}}" method="POST">
        @include('posts.partial.form')
        <button type="submit">Save</button>
    </form>
</div>
@endsection