<div class="admin-header">
    <!-- Life is available only in the present moment. - Thich Nhat Hanh -->
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-6">
                <div class="flex items-center space-x-8">
                    <h1 class="text-3xl font-bold text-gray-900">Admin Panel</h1>
                    <nav class="flex space-x-4">
                        <a href="{{ route('admin.dashboard') }}" class="text-gray-600 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium {{ request()->routeIs('admin.dashboard') ? 'bg-gray-100 text-gray-900' : '' }}">
                            Dashboard
                        </a>
                        <a href="{{ route('admin.users') }}" class="text-gray-600 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium {{ request()->routeIs('admin.users') ? 'bg-gray-100 text-gray-900' : '' }}">
                            Users
                        </a>
                    </nav>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="text-gray-700">Welcome, {{ auth()->user()->name }}</span>
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                        Admin
                    </span>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="text-red-600 hover:text-red-800 px-3 py-2 rounded-md text-sm font-medium">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </header>
</div>