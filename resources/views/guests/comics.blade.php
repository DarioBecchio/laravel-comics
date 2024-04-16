@extends('layouts.app')

@section('content')

    <h1>Comics page</h1>
<section class= "comics">
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
            <div class="col-6">
                <div class="card">
                   <img src="{{$comic['thumb']}}" alt="">
                <div>
                    {{$comic['title']}}
                </div> 
                </div>                
            </div>
            

            @endforeach
        </div>
    </div>
</section>
    


@endsection
