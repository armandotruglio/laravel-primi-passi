@extends("layouts.app")

@section("page-title", "Homepage")

@section("main-content")
<header>
    <div class="container">
        <a href="about" class="pt-4">ABOUT</a>
    </div>

</header>
<h1>
    {{$title}}
</h1>

@endsection
