<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TokohController extends Controller
{
    public function index()
    {
        $tokohs = Tokoh::all();
        return view('tokoh.index', compact('tokohs'));
    }

    public function create()
    {
        return view('tokoh.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'pengarang' => 'required',
            'terbit' => 'required',
            'harga' => 'required',
            'dtok' => 'required',

        ]);

        Tokoh::create($request->all());

        return redirect()->route('tokoh.index')
            ->with('success', 'Tokoh buku berhasil ditambahkan!');
    }

    public function edit(Tokoh $tokoh)
    {
        return view('tokoh.edit', compact('tokoh'));
    }

    public function update(Request $request, Tokoh $tokoh)
    {
        $request->validate([
            'judul' => 'required',
            'pengarang' => 'required',
            'terbit' => 'required',
            'harga' => 'required',
            'dtok' => 'required',
        ]);

        $tokoh->update($request->all());

        return redirect()->route('tokoh.index')
            ->with('success', 'Tokoh buku berhasil diperbarui!');
    }

    public function destroy(Tokoh $tokoh)
    {
        $tokoh->delete();

        return redirect()->route('tokoh.index')
            ->with('success', 'Tokoh buku berhasil dihapus!');
    }
}
