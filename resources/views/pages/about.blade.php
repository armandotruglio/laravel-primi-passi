@extends('layouts.app')


@section('page-title', "About")

@section('main-content')
<div class="container">
    <div class="row">
        @foreach ($list as $item)
        <div class="col">
            <div class="card">
                {{$item}}
            </div>
        </div>

        @endforeach
    </div>
</div>
@endsection
