<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css'])
</head>

<body>
    <h1 class="text-xl text-blue-500">Homepage</h1>
    <a href={{ route('test') }}>Test Page</a>
</body>

</html>