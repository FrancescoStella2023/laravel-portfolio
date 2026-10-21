<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="conainer">
        <header class="class d-flex justify-content-center bg-dark text-white mb-2 p-2">
            <h1>@yield("title")</h1>
        </header>
        <div class="conainer  m-4">
            @yield("content")
        </div>
    </div>
    <footer class="class d-flex justify-content-center bg-dark text-white pt-2">
        <p>2026 - Portoflio project</p>
    </footer>
</body>

</html>