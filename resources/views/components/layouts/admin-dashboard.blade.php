<!-- resources/views/dashboard.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Al Tayaba International - Admin Dashboard</title>
    <link rel="shortcut icon" href="{{ asset('uploads/logo/logo.png')}}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300..700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet"/>
    @vite('resources/css/app.css')
    <style>
      /* Scrollbar Track */
::-webkit-scrollbar {
  width: 5px; /* Width of the scrollbar */
}

::-webkit-scrollbar-track {
  background: #333; /* Color of the scrollbar track */
  border-radius: 10px;
}

/* Scrollbar Thumb */
::-webkit-scrollbar-thumb {
  background: linear-gradient(#3d3d3c, #3d3d3c); /* Gradient color for the scrollbar thumb */
  border-radius: 10px;
}

::-webkit-scrollbar-thumb:hover {
  background: linear-gradient(#3d3d3c, #3d3d3c); /* Darker gradient on hover */
}
    </style>
</head>
<body class="background bg-cover bg-no-repeat text-white font-sans">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
      <x-layouts.admin-dashboard-sidebar />
        <!-- Main Content -->
        <main class="flex-1 bg-cover bg-no-repeat" style="background:linear-gradient(
          rgba(0, 0, 0, 0.7), 
          rgba(0, 0, 0, 0.7)
        ), url('{{ asset('earth.jpeg') }}') no-repeat; background-size: cover;">
            <!-- Header with notification and user profile -->
            <x-layouts.admin-dashboard-navbar />
          {{ $slot }}
        </main>
    </div>

    <!-- Link to Material Icons if you want to use Google icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
   
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
      document.addEventListener('livewire:load', () => {
          Livewire.on('notify', ({ type, message }) => {
              toastr[type](message);
          });
      });
  </script>

<script>
  const menuButton = document.getElementById('menuDropdownButton');
  const sidebar = document.getElementById('sidebar');

  menuButton.addEventListener('click', () => {
      sidebar.classList.toggle('hidden'); // Toggle the 'hidden' class
  });
</script>
  
</body>
</html>
