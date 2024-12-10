<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="{{ route('note.index') }}">Atras</a>

<form action= {{ route( 'note.update', $note->id ) }}>
    @method('PUT')
    @csrf
   
    <label for=titulo>Titulo</label>
    <input type=text id=titulo name=titulo value={{ $note->title }} ></input>
    <label for=descripcion>Descripcion</label>
    <input type=text id=descripcion name=descripcion value= {{ $note->descrciption }}></input>
    <button type=submit>Enviar</button>
</body>
</html>