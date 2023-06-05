<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Saran;
use PDF;

class SaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $saran = Saran::orderBy('id_saran', 'DESC')->get();
        return view('admin.saran.saran', compact('saran'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $saran = new Saran();
        return view('admin.saran.saran-entry', compact(
            'saran'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        saran::create([
            'id_saran' => $request->id_saran,
            'saran' => $request->saran,
        ]);

        return redirect('saran')->with('Success', 'Data Berhasil DiTambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_saran)
    {
        $saran = Saran::find($id_saran);
        return view('admin.saran.saran-edit', compact('saran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_saran)
    {
        $saran = Saran::find($id_saran);
        $saran->update($request->all());
        return redirect()->route('saran')->with('Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_saran)
    {
        $saran = Saran::find($id_saran);
        $saran->delete();
        return redirect()->route('saran');
    }

    public function exportpdf(){
        $data = Saran::all();
        $PDF = PDF::loadView('admin/saran/saran-cetak', array('data' => $data))->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-saran.pdf');
    }
}
