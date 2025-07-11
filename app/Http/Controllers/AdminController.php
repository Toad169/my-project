<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminController extends Controller
{
    /**
     * Show the admin dashboard.
     */
    public function dashboard(): View
    {
        $totalUsers = User::count();
        $adminUsers = User::where('is_admin', true)->count();
        $regularUsers = User::where('is_admin', false)->count();

        return view('admin.pages.dashboard', compact('totalUsers', 'adminUsers', 'regularUsers'));
    }

    /**
     * Show all users for admin management.
     */
    public function users(): View
    {
        $users = User::latest()->paginate(10);
        return view('admin.pages.users', compact('users'));
    }

    /**
     * Make a user an admin.
     */
    public function makeAdmin(User $user): \Illuminate\Http\RedirectResponse
    {
        $user->makeAdmin();
        return redirect()->back()->with('success', 'User has been made an admin.');
    }

    /**
     * Remove admin privileges from a user.
     */
    public function removeAdmin(User $user): \Illuminate\Http\RedirectResponse
    {
        $user->removeAdmin();
        return redirect()->back()->with('success', 'Admin privileges have been removed.');
    }
}
