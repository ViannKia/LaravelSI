<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Pembelian;
use Illuminate\Http\Request;
use PHPUnit\Event\Tracer\Tracer;
use Illuminate\View\View;
use PDF;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaksi = Transaksi::orderBy('id_transaksi', 'DESC')->get();
        return view('admin.transaksi.transaksi', compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pembelian = Pembelian::all();
        $transaksi = new Transaksi();
        return view('admin.transaksi.transaksi-entry', compact(
            'transaksi','pembelian'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_transaksi' => 'required|min:4',
            'id_pembelian' => 'required|min:4',
            'id_admin' => 'required|min:4',
        ]);

        Transaksi::create([
            'id_transaksi' => $request->id_transaksi,
            'id_pembelian' => $request->id_pembelian,
            'id_admin' => $request->id_admin,
            'tanggal_transaksi' => $request->tanggal_transaksi,
            'jenis_transaksi' => $request->jenis_transaksi,
            'total_transaksi' => $request->total_transaksi,
            'poin_transaksi' => $request->poin_transaksi,
        ]);

        return redirect('transaksi')->with('Success', 'Data Berhasil DiTambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_transaksi)
    {
        $pembelian = Pembelian::all();
        $transaksi = Transaksi::find($id_transaksi);
        return view('admin.transaksi.transaksi-edit', compact('transaksi','pembelian'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_transaksi)
    {
        $transaksi = Transaksi::find($id_transaksi);
        $transaksi->update($request->all());
        return redirect()->route('transaksi')->with('Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_transaksi)
    {
        $transaksi = Transaksi::find($id_transaksi);
        $transaksi->delete();
        return redirect()->route('transaksi');
    }

    public function exportpdf(){
        $data = Transaksi::all();
        $PDF = PDF::loadView('admin/transaksi/transaksi-cetak', array('data' => $data))->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-transaksi.pdf');
    }
}
