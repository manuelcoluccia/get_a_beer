<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Contatto ricevuto dal web</h1>

                Nome: {{$bag['name']}} <br>
                Nome: {{$bag['surname']}} <br>
                Nome: {{$bag['mail']}} <br>


                Messaggio: {{$bag['message']}}
            </div>
        </div>
    </div>
    
</body>
</html>