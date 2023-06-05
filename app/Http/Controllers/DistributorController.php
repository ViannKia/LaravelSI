<?php

namespace App\Http\Controllers;

use App\Models\Distributor;
use Illuminate\Bus\Dispatcher;
use Illuminate\Http\Request;
use Illuminate\View\View;
use PDF;

class DistributorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $distributor = Distributor::orderBy('id_distributor', 'DESC')->get();
        return view('admin.distributor.distributor', compact('distributor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $distributor = new Distributor();
        return view('admin.distributor.distributor-entry', compact(
            'distributor'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_distributor' => 'required|min:4',
            'nama_distributor' => 'required|min:3',
            'no_hp' => 'required|min:10',
            'jumlah_barang' => 'required|min:1',
        ]);

        Distributor::create([
            'id_distributor' => $request->id_distributor,
            'nama_distributor' => $request->nama_distributor,
            'no_hp' => $request->no_hp,
            'jumlah_barang' => $request->jumlah_barang,
        ]);

        return redirect('distributor')->with('Success', 'Data Berhasil DiTambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_distributor)
    {
        $distributor = Distributor::find($id_distributor);
        return view('admin.distributor.distributor-edit', compact('distributor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_distributor)
    {
        $distributor = Distributor::find($id_distributor);
        $distributor->update($request->all());
        return redirect()->route('distributor')->with('Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_distributor)
    {
        $distributor = Distributor::find($id_distributor);
        $distributor->delete();
        return redirect()->route('distributor');
    }

    public function exportpdf(){
        $data = Distributor::all();
        $PDF = PDF::loadView('admin/distributor/distributor-cetak', array('data' => $data))->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-distributor.pdf');
    }
}
