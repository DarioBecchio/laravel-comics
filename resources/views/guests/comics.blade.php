@extends('layouts.app')

@section('content')

<h1>Comics page</h1>

<div class="container">
    <div class="row">
        @foreach ($comic as $comics)

        <div class="col-4">
            {{$comic['title']}}

        </div>

        @endforeach
    </div>
</div>


@endsection
