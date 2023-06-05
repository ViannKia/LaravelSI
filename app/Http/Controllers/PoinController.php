<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poin;
use App\Models\Transaksi;
use PDF;

class PoinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $poin = Poin::orderBy('id_poin', 'DESC')->get();
        return view('admin.poin.poin', compact('poin'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $transaksi = Transaksi::all();
        $poin = new Poin();
        return view('admin.poin.poin-entry', compact(
            'poin','transaksi'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_poin' => 'required|min:4',
            'id_transaksi' => 'required|min:3',
            'poin_transaksi' => 'required|min:1',
            'total_poin' => 'required|min:1',
        ]);

        Poin::create([
            'id_poin' => $request->id_poin,
            'id_transaksi' => $request->id_transaksi,
            'poin_transaksi' => $request->poin_transaksi,
            'total_poin' => $request->total_poin,
        ]);

        return redirect('poin')->with('Success', 'Data Berhasil DiTambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_poin)
    {
        $transaksi = Transaksi::all();
        $poin = Poin::find($id_poin);
        return view('admin.poin.poin-edit', compact('poin','transaksi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_poin)
    {
        $poin = Poin::find($id_poin);
        $poin->update($request->all());
        return redirect()->route('poin')->with('Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_poin)
    {
        $poin = Poin::find($id_poin);
        $poin->delete();
        return redirect()->route('poin');
    }

    public function exportpdf(){
        $data = Poin::all();
        $PDF = PDF::loadView('admin/poin/poin-cetak', array('data' => $data))->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-poin.pdf');
    }
}
