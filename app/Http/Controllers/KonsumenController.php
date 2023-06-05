<?php

namespace App\Http\Controllers;

use App\Models\Konsumen;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateKonsumenRequest;
use Illuminate\View\View;
use PDF;

class KonsumenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $konsumen = Konsumen::orderBy('id_konsumen', 'DESC')->get();
        return view('admin.konsumen.konsumen', compact('konsumen'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $konsumen = new Konsumen();
        return view('admin.konsumen.konsumen-entry', compact(
            'konsumen'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_konsumen' => 'required|min:4',
            'nama_konsumen' => 'required|min:3',
            'alamat' => 'required|min:4',
            'no_hp' => 'required|min:3',
        ]);

        Konsumen::create([
            'id_konsumen' => $request->id_konsumen,
            'nama_konsumen' => $request->nama_konsumen,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
        ]);

        return redirect('konsumen')->with('Success', 'Data Berhasil DiTambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_konsumen)
    {
        $konsumen = Konsumen::find($id_konsumen);
        return view('admin.konsumen.konsumen-edit', compact('konsumen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_konsumen)
    {
        $konsumen = Konsumen::find($id_konsumen);
        $konsumen->update($request->all());
        return redirect()->route('konsumen')->with('Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_konsumen)
    {
        $konsumen = Konsumen::find($id_konsumen);
        $konsumen->delete();
        return redirect()->route('konsumen');
    }

    public function exportpdf(){
        $data = Konsumen::all();
        $PDF = PDF::loadView('admin/konsumen/konsumen-cetak', array('data' => $data))->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-konsumen.pdf');
    }
}
