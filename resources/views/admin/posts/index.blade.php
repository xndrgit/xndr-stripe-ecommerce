@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

                @foreach($posts as $post)
                <div class="col-10 text-center">
                    {{ $post->name }}
                </div>
                @endforeach

        </div>
    </div>
@endsection
