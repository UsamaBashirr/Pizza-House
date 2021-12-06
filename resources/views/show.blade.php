<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>{{$show->name}}</p>
    <p>{{$show->type}}</p>
    <p>{{$show->base}}</p>
    
    <ul>
    @foreach($show->toppings as $top)
    <li>{{$top}}</li>
    @endforeach
    </ul>

    <form action="/s/{{$show->id}}" method="post">
    @csrf
    @method('DELETE')
    <button>Delete</button>
    </form>
    
</body>
</html>