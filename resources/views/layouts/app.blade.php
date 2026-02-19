<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reynaldo Jr. Domingo</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('WebProfile.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Add custom CSS for the navy background color and typography -->
    <style>
        :root { --accent: #F7C600; }
        .bg-navy-900 { background-color: #0B1120; }
        .bg-navy-800 { background-color: #0F1724; }
        body { font-family: Inter, system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif; }
        .accent { color: var(--accent); }
    </style>
</head>


     <div id="stars"></div>
     <div id="stars2"></div>
     <div id="stars3"></div>
     @yield('body')


</html>

@yield('scripts')