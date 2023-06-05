<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;
use PDF;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelanggan = Pelanggan::orderBy('id_pelanggan', 'DESC')->get();
        return view('admin.pelanggan.pelanggan', compact('pelanggan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pelanggan = new Pelanggan();
        return view('admin.pelanggan.pelanggan-entry', compact(
            'pelanggan'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_pelanggan' => 'required|min:4',
            'nama_pelanggan' => 'required|min:3',
            'alamat' => 'required|min:4',
            'no_hp' => 'required|min:3',
        ]);

        $pelanggan = new Pelanggan;
        $pelanggan->id_pelanggan = $request->id_pelanggan;
        $pelanggan->nama_pelanggan = $request->nama_pelanggan;
        $pelanggan->alamat = $request->alamat;
        $pelanggan->no_hp = $request->no_hp;
        $pelanggan->save();

        return redirect('pelanggan')->with('Success', 'Data Berhasil DiTambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pelanggan = Pelanggan::find($id);
        return view('admin.pelanggan.pelanggan-edit', compact('pelanggan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $pelanggan = Pelanggan::find($id);
        $pelanggan->update($request->all());
        return redirect()->route('pelanggan')->with('Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pelanggan = Pelanggan::find($id);
        $pelanggan->delete();
        return redirect()->route('pelanggan');
    }

    public function exportpdf(){
        $data = Pelanggan::all();
        $PDF = PDF::loadView('admin/pelanggan/pelanggan-cetak', array('data' => $data))->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-pelanggan.pdf');
    }
}
