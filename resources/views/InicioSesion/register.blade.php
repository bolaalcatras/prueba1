<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/styleResgister.css')}}">
    <title>Document</title>
</head>
<body>
    <p>holaaa</p>
    <div>
        <h3>REGISTRARTE</h3>
    </div>
    <main class="registro">
        <form action="{{route('validar-registro')}}" method="POST">
            @csrf
            <div class="is-1">
                <label for="emailInput">Email</label>
                    <input type="email" class="controlEmail" id="emailInput" name="email">  
            </div>
            <div class="is-1">
                <label for="passwordInput">Contraseña</label>
                    <input type="password" class="controlPassword" id="passwordInput" name="password">  
            </div>
            <div class="is-1">
                <label for="userInput">Usuario</label>
                    <input type="user" class="controlUser" id="userInput" name="name">  
            </div>
            <button type="submit" class="btn-1">Registrarte</button>
        </form>
    </main>
</body>
</html>