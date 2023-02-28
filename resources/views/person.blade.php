<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <tr>
        <th> #</th>
        <th> Name</th>
        <th> Age</th>
        <th> Can vote or not</th>


    </tr>
<body>
    <h1 style="color:{{$color}}">Person</h1>
    <h2>This is the person view</h2>
    <h2>This is the sample view</h2>

   <p><b>Name: {{$name }}</p>
   <p><b>Age: {{$age }}</p>
   <p><b>Address: {{$address }}</p>

   <hr>
   @if($age > 18)
    <p style="color: red">Cannot Vote!</p>
   @else
   <p style="color: green">Can Vote!</p>
   @endif

   <hr>
   <h3> Siblings</h3>
   <ol>
        @foreach($siblings as $sibling)
        <li>
            {{$sibling['name']}}
        </li>
        @endforeach
    <ol>
</body>
</html>