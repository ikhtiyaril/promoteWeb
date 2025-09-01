<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <!-- Viewport wajib ada biar scaling di mobile normal -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Vite assets -->
  @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/app.jsx'])

  <title>Ikhtiyaril Ikhsan</title>
</head>
<body class="bg-gray-950 font-[Poppins] text-white antialiased">
  <div class="flex flex-col min-h-screen bg-gray-950">
    <!-- Header -->
    <x-header />

    <!-- Main content -->
    <main class="flex-1 w-full  ">
      {{$slot}}
    </main>

    <!-- Footer -->
    <x-footer />
  </div>
</body>
</html>
