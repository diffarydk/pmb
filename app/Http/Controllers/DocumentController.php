<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class DocumentController extends Controller
{

    public function index()
    {
        $documents = Document::all();
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
            'no_telp' => 'required|numeric',
            'email' => 'required|string|email|max:255|unique:documents',
            'ktp' => 'required|numeric|digits:16|unique:documents',
            'nilai' => 'required|min:2|max:5',
            'ijazah' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'nilai_akhir' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
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
            'nilai' => request('nilai'),
            'ijazah' => $ijazahPath,
            'nilai_akhir' => $nilaiAkhirPath,
        ]);

        return redirect()->route(
            'document.show',
            ['document' => $document]
        );
    }

    public function edit(Document $document)
    {
        $editing = true;
        $documents = Document::all();
        return view('shared.update', compact('document', 'editing', 'documents'));
    }

    public function update(Document $document)
    {
        try {
            request()->validate([
                'nama' => 'required|string|max:255',
                'no_telp' => 'required|numeric',
                'email' => 'required|string|email|max:255',
                'ktp' => 'required|numeric|digits:16',
                'nilai' => 'required|min:2|max:5',
                'ijazah' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                'nilai_akhir' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            // Update existing document attributes
            $document->nama = request('nama');
            $document->no_telp = request('no_telp');
            $document->email = request('email');
            $document->ktp = request('ktp');
            $document->nilai = request('nilai');

            // Update or store new files
            if (request()->hasFile('ijazah')) {
                $ijazahPath = request()->file('ijazah')->store('public/ijazah');
                $document->ijazah = $ijazahPath;
            }

            if (request()->hasFile('nilai_akhir')) {
                $nilaiAkhirPath = request()->file('nilai_akhir')->store('public/nilai_akhir');
                $document->nilai_akhir = $nilaiAkhirPath;
            }

            $document->save();
            if (Auth::user()->role === 'admin') {

                return redirect()->route('document.showAll');
            } else{
                return redirect()->route('document.input');
            };
        } catch (\Exception $e) {
            // Log or display the exception message
            dd($e->getMessage());
        }
    }


    public function delete(Document $document)
    {
        Storage::disk('public')->delete($document->ijazah);
        Storage::disk('public')->delete($document->nilai_akhir);

        $document->delete();


        return redirect()->route('document.showAll');
    }

    public function selection()
    {
        $topN = 0;
        $documents = Document::orderByRaw('CAST(nilai AS SIGNED) DESC')->get();
        return view('shared.selection', compact('documents', 'topN'));
    }

    public function updateSelection(Request $request)
    {
        // Retrieve the topN value and cast it to an integer
        $topN = (int) $request->input('topN');

        // Update the status of top N documents to 'diterima'
        DB::table('documents')
            ->join(DB::raw("(SELECT nilai FROM documents ORDER BY CAST(nilai AS SIGNED) DESC LIMIT $topN) as top_n"), function ($join) {
                $join->on('documents.nilai', '=', 'top_n.nilai');
            })
            ->update(['status' => 'diterima']);

        // Update the status of remaining documents to 'ditolak'
        DB::table('documents')
            ->where('status', '<>', 'diterima') // Only update documents not marked as 'diterima'
            ->update(['status' => 'ditolak']);

        // Fetch all documents for the view
        $documents = Document::orderByRaw('CAST(nilai AS SIGNED) DESC')->get();

        return view('shared.selection', compact('documents', 'topN'));
    }
    public function pengumuman()
    {
        $documents = Document::all(); // Fetch all columns
        dd($documents);
        return view('component.cardpengumuman', compact('documents'));
    }
}
