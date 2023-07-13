<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite('resources/scss/home.scss')
</head>

<body>
    <h1>Tratte ferroviarie</h1>

    <div class="flex">
        @foreach ($sections as $section)
            <div class="card">
                <h2>
                    Compagnia: {{ $section->company_name }}
                </h2>
                <h3>Partenza: {{ $section->departure_station }} {{ $section->departure_time }}</h3>
                <h3>Arrivo: {{ $section->arrival_station }} {{ $section->arrival_time }}</h3>
                @if ($section->in_time)
                    <h3>Treno in orario</h3>
                @else
                    <h3>Treno in ritardo</h3>
                @endif
            </div>
        @endforeach
    </div>
</body>

</html>
