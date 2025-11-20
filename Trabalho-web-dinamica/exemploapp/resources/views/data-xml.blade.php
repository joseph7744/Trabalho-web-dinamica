<?xml version="1.0" encoding="UTF-8"?>
<data>
@foreach ($registros as $item)
    <item>
        <titulo>{{ $item->titulo }}</titulo>
        <artista>{{ $item->artista }}</artista>
        <genero>{{ $item->genero }}</genero>
        <ano_criacao>{{ $item->ano_criacao }}</ano_criacao>
        <duracao>{{ $item->duracao }}</duracao>
    </item>
@endforeach
</data>