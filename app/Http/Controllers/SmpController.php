<?php

namespace App\Http\Controllers;

use App\Models\Smp;
use Illuminate\Http\Request;

class SmpController extends Controller
{
    public function index()
    {
        $smp = Smp::all();
        return view('smp.index', compact('smp'));
    }

    public function create()
    {
        return view('smp.create');
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

        Smp::create($request->all());

        return redirect()->route('smp.index')
            ->with('success','Data smp berhasil ditambahkan.');
    }

    public function show(Smp $smp)
    {
        return view('smp.show',compact('smp'));
    }

    public function edit(smp $smp)
    {
        return view('smp.edit',compact('smp'));
    }

    public function update(Request $request, smp $smp)
    {
        $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'nis' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
        ]);

        $smp->update($request->all());

        return redirect()->route('smp.index')
            ->with('success','Data smp berhasil diupdate.');
    }

    public function destroy(Smp $smp)
    {
        $smp->delete();

        return redirect()->route('smp.index')
            ->with('success','Data smp berhasil dihapus.');
    }
}
