@extends('base')

@section('title', 'Créer un article')

@section('content')
    <form action="" method="post">
        @csrf
        <input type="text" name="title" value="Article de démonstration">
        <div>
            @error("title")
            {{ $message }}
            @enderror
        </div>
        <div>
            <textarea name="content" value="">Contenu de la démonstration</textarea>
            @error("content")
            {{ $message }}
            @enderror
        </div>
        <button>Enregistrer</button>
    </form>
@endsection