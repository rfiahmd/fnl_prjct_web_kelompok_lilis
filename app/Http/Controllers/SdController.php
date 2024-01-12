<?php

namespace App\Http\Controllers;

use App\Models\Sd;
use Illuminate\Http\Request;

class SdController extends Controller
{
    public function index()
    {
        $sd = Sd::all();
        return view('sd.index', compact('sd'));
    }

    public function create()
    {
        return view('sd.create');
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

        Sd::create($request->all());

        return redirect()->route('sd.index')
            ->with('success','Data SD berhasil ditambahkan.');
    }

    public function show(Sd $sd)
    {
        return view('sd.show',compact('sd'));
    }

    public function edit(Sd $sd)
    {
        return view('sd.edit',compact('sd'));
    }

    public function update(Request $request, Sd $sd)
    {
        $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'nis' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
        ]);

        $sd->update($request->all());

        return redirect()->route('sd.index')
            ->with('success','Data SD berhasil diupdate.');
    }

    public function destroy(Sd $sd)
    {
        $sd->delete();

        return redirect()->route('sd.index')
            ->with('success','Data SD berhasil dihapus.');
    }
}
