<!DOCTYPE html>
<html lang="en">

<x-header>
    <title>{{ $title }}</title>
    <meta content="{{ $description }}" name="description">
    <meta content="{{ $keyword }}" name="keywords">
</x-header>

<body>

  <x-navbar></x-navbar>

  {{ $slot }}

  <x-footer></x-footer>

</body>

</html>