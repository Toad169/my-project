<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen">
        <!-- Header -->
        <x-admin-header :admin="auth()->user()" />
        <!-- Main Content -->
        <div>
            @yield('admin-content')
        </div>
    </div>
</body>
</html> 