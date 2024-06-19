<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <main class="login">
        <form action="{{route('inicio-sesion')}}" method="POST">
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
            <div>
                   <a href="{{route('registro')}}">No tienes cuenta?</a>
            </div>
            <button type="submit" class="btn-1">acceder</button>
        </form>
    </main>
</body>
</html>