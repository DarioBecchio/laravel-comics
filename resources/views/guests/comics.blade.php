@extends('layouts.app')

@section('content')

    <h1>Comics page</h1>

    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
            <div class="col-4">
                <img src="{{$comic['thumb']}}" alt="">
                <div class="col-4">
                    {{$comic['title']}}
                </div>
            </div>
            

            @endforeach
        </div>
    </div>


@endsection
