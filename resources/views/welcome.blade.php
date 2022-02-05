<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <script src="//unpkg.com/alpinejs" defer></script>
    @livewireStyles
</head>
<body class="antialiased">
    <livewire:livewire-dispatch-bug-demo />

    @livewireScripts
</body>
</html>
