<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Notas</h1>
    <ul>
    <a href="{{ route('note.insertForm') }}">Insert</a>
        @foreach ($notes as $note)
        <li>{{$note->title}} -- {{$note->description}}
        <a href="{{ route('note.edit') }}">Edit</a>
        </li>
        @endforeach
</ul>
</body>
</html>