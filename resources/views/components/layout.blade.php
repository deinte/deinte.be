<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="flex flex-row min-h-screen">
    <x-navigation.bar />
    <main>
        {{ $slot }}
    </main>
</div>
</body>
</html>
