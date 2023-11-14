<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (in_array(auth()->user()->role, ['admin'])) {
            return view('admin.adminhome');
        } else {
            return view('dashboard');
        }
        return redirect()->route('login');
    }
    public function input()
    {
        $user = Auth::user();
        $documents = $user->documents;

        return view('shared.input', compact('documents'));
    }
}
