<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Esercitazione Laravel</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>

<body>



    {{--! inserisci il contenuto di una pangina in paniera dinamica
        slot vuol dire posizione/inserimento
        è un segnaposto
    --}}
    <x-navbar></x-navbar>
        
    {{ $slot }}

    
</body>
</html>