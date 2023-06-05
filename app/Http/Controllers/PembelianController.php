<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;
use App\Models\Barang;
use App\Models\Pelanggan;
use App\Models\Konsumen;
use Illuminate\Http\Request;
use Illuminate\View\View;
use PDF;

class PembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pembelian = Pembelian::orderBy('id_pembelian', 'DESC')->get();
        return view('admin.pembelian.pembelian', compact('pembelian'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $barang = Barang::all();
        $pelanggan = Pelanggan::all();
        $konsumen = Konsumen::all();
        $pembelian = new Pembelian();
        return view('admin.pembelian.pembelian-entry', compact(
            'pembelian','barang','pelanggan','konsumen'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_pembelian' => 'required|min:4',
            'id_pembeli' => 'required|min:3',
            'id_barang' => 'required|min:4',
            'id_admin' => 'required|min:3',
            'jumlah_barang' => 'required|min:1',
        ]);

        Pembelian::create([
            'id_pembelian' => $request->id_pembelian,
            'id_pembeli' => $request->id_pembeli,
            'id_barang' => $request->id_barang,
            'id_admin' => $request->id_admin,
            'jumlah_barang' => $request->jumlah_barang,
        ]);

        return redirect('pembelian')->with('Success', 'Data Berhasil DiTambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $barang = Barang::all();
        $pelanggan = Pelanggan::all();
        $konsumen = Konsumen::all();
        $pembelian = Pembelian::find($id);
        return view('admin.pembelian.pembelian-edit', compact('pembelian','barang','pelanggan','konsumen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $pembelian = Pembelian::find($id);
        $pembelian->update($request->all());
        return redirect()->route('pembelian')->with('Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pembelian = Pembelian::find($id);
        $pembelian->delete();
        return redirect()->route('pembelian');
    }

    public function exportpdf(){
        $data = Pembelian::all();
        $PDF = PDF::loadView('admin/pembelian/pembelian-cetak', array('data' => $data))->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-pembelian.pdf');
    }
}
