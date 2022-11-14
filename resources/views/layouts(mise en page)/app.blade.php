{{-- crée un fichier de mise en page commun à toutes les pages --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mon site</title>
</head>
<body>
    {{-- permet de définir un endroit ou du contenue dynamique peut étre appeler (contenue propre à chaques page) le nom est propre au contenue ici => 'content' --}}
    @yield('content') 

</body>
</html>