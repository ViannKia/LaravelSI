<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Distributor;
use Illuminate\Http\Request;
use PDF;
use Illuminate\View\View;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Barang::orderBy('id_barang', 'DESC')->get();
        return view('admin.barang.items', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $distributor = Distributor::all();
        $items = new Barang();
        return view('admin.barang.items-entry', compact(
            'items','distributor'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'id_barang' => 'required|min:4',
            'merek_barang' => 'required',
            'jumlah_barang' => 'required|min:1',
            'kualitas_barang' => 'required',
            'id_distributor' => 'required|min:4',
        ]);

        Barang::create([
            'id_barang' => $request->id_barang,
            'merek_barang' => $request->merek_barang,
            'jumlah_barang' => $request->jumlah_barang,
            'kualitas_barang' => $request->kualitas_barang,
            'id_distributor' => $request->id_distributor,
        ]);

        return redirect('barang')->with('Success', 'Data Berhasil DiTambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_barang)
    {
        $distributor = Distributor::all();
        $items = Barang::find($id_barang);
        return view('admin.barang.items-edit', compact('items','distributor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_barang)
    {
        $items = Barang::find($id_barang);
        $items->update($request->all());
        return redirect()->route('items')->with('Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_barang)
    {
        $items = Barang::find($id_barang);
        $items->delete();
        return redirect()->route('items');
    }

    public function exportpdf(){
        $data = Barang::all();
        $PDF = PDF::loadView('admin/barang/items-cetak', array('data' => $data))->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-barang.pdf');
    }
}
