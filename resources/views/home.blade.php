<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CNAM</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="max-w-5xl mx-auto">
        <h1 class="text-2xl text-blue-500 font-bold text-center">
            Boulangerie CNAM {{ $name }}
        </h1>

        <div class="grid grid-cols-3 gap-4">
            @foreach ($breads as $bread)
                <div>
                    <h2>{{ $bread->name }}</h2>
                    <p>{{ $bread->price }} €</p>
                </div>
            @endforeach
        </div>

        @foreach ($cars as $index => $car)
            <p>{{ $index + 1 }} --- {{ $car }}</p>
        @endforeach
    </div>
</body>
</html>
