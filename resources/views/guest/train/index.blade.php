<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Treni</h1>
    @forelse ($trains as $train )

    <h4>
        {{$train->company}}  {{$train->departing_station}} {{$train->arriving_station}}
    </h4>
    <p>
        {{$train->departing_time}}  {{$train->arriving_time}} 
        {{$train->train_code}}         {{$train->wagons_no}}  {{$train->on_time}} {{$train->cancelled}} 
    </p>
        
    @empty
        <li>
            Non ci sono treni disponibili oggi,
        </li>
    @endforelse
</body>
</html>