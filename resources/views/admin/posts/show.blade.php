@extends('layouts.app')
@section('titolo', 'dettagli aggiuntivi')
    
@section('content')

    <div class="container">
        
        <h2><strong>{{$post->slug}}</strong></h2>

        <hr>
        <p> {{$post->article}} </p>
        <hr>
        <a href="{{route('admin.posts.index')}}" class="btn btn-primary">indietro</a>


    </div>
    
@endsection