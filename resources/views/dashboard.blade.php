<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- tailwind  -->
  @vite('resources/css/app.css')

  <!-- flowbite -->
  <!-- @vite(['resources/css/app.css','resources/js/app.js']) -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
   @include('partials/sidebar')

   <div class="p-4 pt-16 sm:ml-64">
   <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
   @yield('conten')
   </div>
   </div>


  <!-- script flowbite -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>
</html>
