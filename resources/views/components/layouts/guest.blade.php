<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title ?? ' No disponible '}} - DDR Proyectos</title>
    <meta name="description" content="{{$description ?? 'No disponible'}}">
   @stack('css')
</head>
<body>
    <x-nav/>
{{$slot}}
</body>
@stack('js')
</html>
