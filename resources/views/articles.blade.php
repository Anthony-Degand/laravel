{{-- afficher par extension notre fichier app dans le dossier layouts(mise en page) --}}
@extends('layouts(mise en page).app') 

{{-- on ouvre une section du même nom que notre yield et on la ferme apres notre contenue --}}
@section('content')

        <h1>Liste des articles</h1>
    
        <h2>{{$ok}}</h2>

    @foreach ( $posts as $post )
        <h3>{{ $post }}</h3>
    @endforeach


@endsection