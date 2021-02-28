<!DOCTYPE html>
<html lang="en">
@include('template.head')
<body>  
    <div class="container-fluid">
        <div class="row">
            @yield('content')
        </div>
    </div>
    @include('template.footer-script')
</body>
</html>