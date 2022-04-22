<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spam Numbers</title>
</head>
<body>
            <div class="container">
                <h1>Spam Numbers</h1>
                <hr />
                
                @foreach ($numbers as $number)
                    <div class="well">
                    <h3>{{ $number->number }}</h3>
                    <h4>
                        {{ $number->reported_by }}
                    </h4>
                @endforeach
                {{$numbers->Links()}}
            </div>
</body>

</html>