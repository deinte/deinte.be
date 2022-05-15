<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="flex flex-row min-h-screen">
        <nav class="flex flex-col bg-gray-100 px-8 w-1/5">
            <a href="{{ route('posts.index') }}">Posts</a>
        </nav>
        <main>
            {{ $slot }}
        </main>
    </div>
</body>
</html>
