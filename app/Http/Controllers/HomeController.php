<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $documents = $user->documents ?? collect();

        return view('shared.input', compact('documents', 'user'));
    }

    public function search(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->input('search');

        // mengambil data dari table pegawai sesuai pencarian data
        $documents = DB::table('documents')
            ->where('nama', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data documents ke view show
        return view('shared.show', ['documents' => $documents]);
    }
}
