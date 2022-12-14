<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/node_modules/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="icon" href="images/Logo/bs.jpg">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Varela+Round&display=swap');
            
            html {  
                user-select: none;
            }

            ::-webkit-scrollbar { width: 5px; }
            ::-webkit-scrollbar-track { background: hsl(0, 0%, 7%); }
            ::-webkit-scrollbar-thumb {
                background-image: linear-gradient(to bottom, hsl(197, 100%, 50%), hsl(342, 100%, 50%));
                border-radius: 10px;
            }
        </style>
        <title>Bernard Sapida</title>
    </head>
    <body style="background-color: hsl(0, 0%, 2%);">
        <div id="app">
            <router-view></router-view>
        </div>
        
        <script src="{{ mix('js/app.js') }}"></script>
    </body>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
</html>