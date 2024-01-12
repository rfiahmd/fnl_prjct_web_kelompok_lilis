<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        $guru = Guru::all();
        return view('guru.index', compact('guru'));
    }

    public function create()
    {
        return view('guru.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nuptk' => 'required',
            'alamat' => 'required',
            'email' => 'required|email',
            'nomor_hp' => 'required',
        ]);

        Guru::create($request->all());

        return redirect()->route('guru.index')
            ->with('success', 'Guru created successfully.');
    }

    public function edit(Guru $guru)
    {
        return view('guru.edit', compact('guru'));
    }

    public function update(Request $request, Guru $guru)
    {
        $request->validate([
            'nama' => 'required',
            'nuptk' => 'required',
            'alamat' => 'required',
            'email' => 'required|email',
            'nomor_hp' => 'required',
        ]);

        $guru->update($request->all());

        return redirect()->route('guru.index')
            ->with('success', 'Guru updated successfully');
    }

    public function destroy(Guru $guru)
    {
        $guru->delete();

        return redirect()->route('guru.index')
            ->with('success', 'Guru deleted successfully');
    }
}
