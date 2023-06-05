<?php

namespace App\Http\Controllers;

use App\Models\RiwayatTransaksi;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use PDF;

class RiwayatTransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $riwayat = RiwayatTransaksi::orderBy('id_riwayat_transaksi', 'DESC')->get();
        return view('admin.riwayat-transaksi.riwayat', compact('riwayat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $transaksi = Transaksi::all();
        $riwayat = new RiwayatTransaksi();
        return view('admin.riwayat-transaksi.riwayat-entry', compact(
            'riwayat','transaksi'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_riwayat_transaksi' => 'required|min:4',
            'id_transaksi' => 'required|min:4',
        ]);

        RiwayatTransaksi::create([
            'id_riwayat_transaksi' => $request->id_riwayat_transaksi,
            'id_transaksi' => $request->id_transaksi,
        ]);

        return redirect('riwayat')->with('Success', 'Data Berhasil DiTambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_riwayat_transaksi)
    {
        $transaksi = Transaksi::all();
        $riwayat = RiwayatTransaksi::find($id_riwayat_transaksi);
        return view('admin.riwayat-transaksi.riwayat-edit', compact('riwayat','transaksi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_riwayat_transaksi)
    {
        $riwayat = RiwayatTransaksi::find($id_riwayat_transaksi);
        $riwayat->update($request->all());
        return redirect()->route('riwayat')->with('Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_riwayat_transaksi)
    {
        $riwayat = RiwayatTransaksi::find($id_riwayat_transaksi);
        $riwayat->delete();
        return redirect()->route('riwayat');
    }

    public function exportpdf(){
        $data = RiwayatTransaksi::all();
        $PDF = PDF::loadView('admin/riwayat-transaksi/riwayat-cetak', array('data' => $data))->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-riwayat-transaksi.pdf');
    }
}
