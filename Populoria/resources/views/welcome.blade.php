<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Populoria</title>

    <link rel="shortcut icon" href="{{ asset('images/Populoria.svg') }}" type="image/x-icon">

    <script defer href="{{ asset('images/Populoria.svg') }}"></script>

    {{-- Aqui está bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>

    {{-- Aquí están el css principal y el js principal --}}
    <link href="{{ asset('styles/style.css') }}" rel="stylesheet">
    <link href="{{ asset('styles/database.css') }}" rel="stylesheet">
    <script defer src="{{ asset('js/welcome.js') }}"></script>

</head>

<body id="foto">
    <svg class="index h-100 w-100" xmlns='http://www.w3.org/2000/svg' viewBox='0 0 2000 1500'>
        <rect fill='#000000' width='2000' height='1500' />
        <defs>
            <radialGradient id='a' gradientUnits='objectBoundingBox'>
                <stop offset='0' stop-color='#7F7F7F' />
                <stop offset='1' stop-color='#000000' />
            </radialGradient>
            <linearGradient id='b' gradientUnits='userSpaceOnUse' x1='0' y1='750' x2='1550'
                y2='750'>
                <stop offset='0' stop-color='#404040' />
                <stop offset='1' stop-color='#000000' />
            </linearGradient>
            <path id='s' fill='url(#b)'
                d='M1549.2 51.6c-5.4 99.1-20.2 197.6-44.2 293.6c-24.1 96-57.4 189.4-99.3 278.6c-41.9 89.2-92.4 174.1-150.3 253.3c-58 79.2-123.4 152.6-195.1 219c-71.7 66.4-149.6 125.8-232.2 177.2c-82.7 51.4-170.1 94.7-260.7 129.1c-90.6 34.4-184.4 60-279.5 76.3C192.6 1495 96.1 1502 0 1500c96.1-2.1 191.8-13.3 285.4-33.6c93.6-20.2 185-49.5 272.5-87.2c87.6-37.7 171.3-83.8 249.6-137.3c78.4-53.5 151.5-114.5 217.9-181.7c66.5-67.2 126.4-140.7 178.6-218.9c52.3-78.3 96.9-161.4 133-247.9c36.1-86.5 63.8-176.2 82.6-267.6c18.8-91.4 28.6-184.4 29.6-277.4c0.3-27.6 23.2-48.7 50.8-48.4s49.5 21.8 49.2 49.5c0 0.7 0 1.3-0.1 2L1549.2 51.6z' />
            <g id='g'>
                <use href='#s' transform='scale(0.12) rotate(60)' />
                <use href='#s' transform='scale(0.2) rotate(10)' />
                <use href='#s' transform='scale(0.25) rotate(40)' />
                <use href='#s' transform='scale(0.3) rotate(-20)' />
                <use href='#s' transform='scale(0.4) rotate(-30)' />
                <use href='#s' transform='scale(0.5) rotate(20)' />
                <use href='#s' transform='scale(0.6) rotate(60)' />
                <use href='#s' transform='scale(0.7) rotate(10)' />
                <use href='#s' transform='scale(0.835) rotate(-40)' />
                <use href='#s' transform='scale(0.9) rotate(40)' />
                <use href='#s' transform='scale(1.05) rotate(25)' />
                <use href='#s' transform='scale(1.2) rotate(8)' />
                <use href='#s' transform='scale(1.333) rotate(-60)' />
                <use href='#s' transform='scale(1.45) rotate(-30)' />
                <use href='#s' transform='scale(1.6) rotate(10)' />
            </g>
        </defs>
        <g transform='rotate(0 0 0)'>
            <g transform='rotate(0 0 0)'>
                <circle fill='url(#a)' r='3000' />
                <g opacity='0.5'>
                    <circle fill='url(#a)' r='2000' />
                    <circle fill='url(#a)' r='1800' />
                    <circle fill='url(#a)' r='1700' />
                    <circle fill='url(#a)' r='1651' />
                    <circle fill='url(#a)' r='1450' />
                    <circle fill='url(#a)' r='1250' />
                    <circle fill='url(#a)' r='1175' />
                    <circle fill='url(#a)' r='900' />
                    <circle fill='url(#a)' r='750' />
                    <circle fill='url(#a)' r='500' />
                    <circle fill='url(#a)' r='380' />
                    <circle fill='url(#a)' r='250' />
                </g>
                <g class="dinamicBackground" transform='rotate(-10 0 0)'>
                    <use href='#g' transform='rotate(10)' />
                    <use href='#g' transform='rotate(120)' />
                    <use href='#g' transform='rotate(240)' />
                </g>
                <circle fill-opacity='0.1' fill='url(#a)' r='3000' />
            </g>
        </g>
    </svg>
    <main>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="logo">
                        <img src="{{ asset('images/populoria.svg') }}" alt="Logo de Populoria">
                        <h1>POPULORIA</h1>
                        <div class="row">
                          
                            <div class="col-md-4 mt-5">
                                <a href="{{ route('home') }}"> <button type="button"
                                        class="btn btn-success  btn-block">Home</button></a>
                            </div>
                        
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
