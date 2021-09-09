<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <title>Document</title>
</head>
<body>

    <div class="container">

        @foreach($movies as $movie)
            <div class="movies">
                <img src="{{$movie->poster}}" alt="">
                <h4>{{ $movie->title }}</h4><br>
                <div>Nazionalià: {{ $movie->nationality }}</div>
                <div>Anno: {{ $movie->date }}</div>
                <div>voto: {{ $movie->vote }}</div>
            
            </div>  
        @endforeach
        

    </div>

</body>
</html>