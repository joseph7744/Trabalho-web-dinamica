<?xml version="1.0" encoding="UTF-8"?>
<data>
@foreach ($registros as $item)
    <item>
        <linha>{{ $item->linha }}</linha>
        <data>{{ $item->data }}</data>
        <booleano>{{ $item->booleano == 0 ? "false" : "true" }}</booleano>
        <decimal>{{ $item->decimal }}</decimal>
        <inteiro>{{ $item->inteiro }}</inteiro>
    </item>
@endforeach
</data>