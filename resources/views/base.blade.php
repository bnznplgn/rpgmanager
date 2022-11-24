<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

       {{--  https://fontawesome.com/kits/1da50133d0/use --}}
        <script src="https://kit.fontawesome.com/1da50133d0.js" crossorigin="anonymous"></script>
    
    
    </head>

    <body>

        <main class="container">
            <div class="content">
                @yield('content')
            </div>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>

</html>
