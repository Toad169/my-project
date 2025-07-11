<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <x-admin-sidebar />
        
        <!-- Main Content Area -->
        <div class="flex-1 flex flex-col">
            <!-- Header -->
            <x-admin-header :admin="auth()->user()" />
            
            <!-- Main Content -->
            <main class="flex-1 p-6">
                @yield('admin-content')
            </main>
        </div>
    </div>
</body>
</html>