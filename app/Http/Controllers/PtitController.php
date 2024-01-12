<?php

namespace App\Http\Controllers;

use App\Models\Ptit;
use Illuminate\Http\Request;

class PtitController extends Controller
{
    public function index()
    {
        $ptit =Ptit::all();
        return view('ptit.index', compact('ptit'));
    }

    public function create()
    {
        return view('ptit.create');
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

        Ptit::create($request->all());

        return redirect()->route('ptit.index')
            ->with('success','Data ptit berhasil ditambahkan.');
    }

    public function show(Ptit $ptit)
    {
        return view('ptit.show',compact('ptit'));
    }

    public function edit(Ptit $ptit)
    {
        return view('ptit.edit',compact('ptit'));
    }

    public function update(Request $request, Ptit $ptit)
    {
        $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'nis' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
        ]);

        $ptit->update($request->all());

        return redirect()->route('ptit.index')
            ->with('success','Data ptit berhasil diupdate.');
    }

    public function destroy(Ptit $ptit)
    {
        $ptit->delete();

        return redirect()->route('ptit.index')
            ->with('success','Data ptit berhasil dihapus.');
    }

}
