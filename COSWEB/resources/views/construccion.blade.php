<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>En construcción...</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@heroicons/vue/24/solid.css">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/loading-bar.css') }}">
    <script type="text/javascript" src="{{ asset('js/loading-bar.js') }}"></script>
</head>
<body class="flex justify-center items-center h-screen" style="background-color: #fbcf16;">
        <div class=" flex flex-col items-center justify-center">
            <div>
                <img src="{{ asset('./logoCos.png') }}" alt="Producto" style="width: 350px; height: 350px;">   
            </div>
            
            <div data-preset="line" data-stroke="#12943a" data-stroke-trail="#fff" data-value="60" class="ldBar" style="width:70%;height:50px"></div>
            <h2 class="text-center">60%</h2>

            <div>
                <h2 class="text-center">Estamos en construcción...</h2>
            </div>
        </div>
</body>
</html>