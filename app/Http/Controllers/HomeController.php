<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $userType = Auth::user()->role;

            if ($userType === 'user') {
                return view('dashboard');
            } elseif ($userType === 'admin') {
                return view('admin.adminhome');
            } else {
                return redirect()->back();
            }
        } else {
            return view('auth.login'); // Redirect unauthenticated users to the login page
        }
    }
}
