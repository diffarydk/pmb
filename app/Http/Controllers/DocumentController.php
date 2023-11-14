<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DocumentController extends Controller
{

    public function index()
    {
        $documents = Document::all(); // Retrieve all documents from the database

        return view('shared.show', compact('documents'));
    }


    public function show(Document $document)
    {
        return view('shared.show', compact('document'));
    }

    public function store(Document $document)
    {
        // Validate the request data
        request()->validate([
            'nama' => 'required|string|max:255',
            'no_telp' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:12',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . Document::class],
            'ktp' => 'required|numeric|digits_between:10,20|unique:documents',
            'ijazah' => ['required', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
            'nilai_akhir' => ['required', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
        ]);

        $user = User::with('documents')->find(Auth::id());

        if ($user->documents) {
            // Redirect back with an error message
            return redirect()->back()->with('error', 'User already has a document.');
        }

        $ijazahPath = request()->file('ijazah')->store('ijazah', 'public');
        $nilaiAkhirPath = request()->file('nilai_akhir')->store('nilai_akhir', 'public');

        // Create a new Document instance with user information
        $document = Document::create([
            'user_id' => Auth::id(),
            'nama' => request('nama'),
            'no_telp' => request('no_telp'),
            'email' => request('email'),
            'ktp' => request('ktp'),
            'ijazah' => $ijazahPath,
            'nilai_akhir' => $nilaiAkhirPath,
        ]);

        return redirect()->route(
            'documents.show',
            ['document' => $document]
        );
    }
}
