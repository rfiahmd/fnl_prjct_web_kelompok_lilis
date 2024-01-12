<?php

namespace App\Http\Controllers;

use App\Models\Sma;
use Illuminate\Http\Request;

class SmaController extends Controller
{
    public function index()
    {
        $sma = Sma::all();
        return view('sma.index', compact('sma'));
    }

    public function create()
    {
        return view('sma.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'nis' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
        ]);

        Sma::create($request->all());

        return redirect()->route('sma.index')
            ->with('success','Data sma berhasil ditambahkan.');
    }

    public function show(Sma $sma)
    {
        return view('sma.show',compact('sma'));
    }

    public function edit(Sma $sma)
    {
        return view('sma.edit',compact('sma'));
    }

    public function update(Request $request, Sma $sma)
    {
        $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'nis' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
        ]);

        $sma->update($request->all());

        return redirect()->route('sma.index')
            ->with('success','Data sma berhasil diupdate.');
    }

    public function destroy(Sma $sma)
    {
        $sma->delete();

        return redirect()->route('sma.index')
            ->with('success','Data sma berhasil dihapus.');
    }
}