@extends('layouts.app')
@section('titolo', 'crea un nuovo post')
    

@section('content')
<div class="container">
    <form action='{{route('admin.posts.store')}}'method="post">
        @csrf
        <div class="mb-3">
          <label for="titolo" class="form-label">Titolo</label>
          <input type="text" class="form-control" id="titolo" aria-describedby="emailHelp" name="title">
          <label for="descrizione" class="form-label">articolo</label>
          <textarea name="article" id="descrizione" cols="30" rows="10" class="form-control"></textarea>  
        </div>
        <button type="submit" class="btn btn-primary">crea</button>
      </form>
    @if ($errors->any())
        <div class="alert">
          @foreach ( $errors->all() as $er)
            <h2>! {{$er}}</h2>
          @endforeach
          <h2>Attenzione i campi non sono compilati</h2>
        </div>
    @endif
</div>
    
@endsection