<?php

namespace App\Http\Controllers;

use App\Models\PenukaranPoin;
use App\Models\Poin;
use Illuminate\Http\Request;
use PDF;

class PenukaranPoinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penukaranpoin = PenukaranPoin::orderBy('id_penukaranpoin', 'DESC')->get();
        return view('admin.penukaran-poin.penukaran-poin', compact('penukaranpoin'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $poin = Poin::all();
        $penukaranpoin = new PenukaranPoin();
        return view('admin.penukaran-poin.penukaran-poin-entry', compact(
            'penukaranpoin','poin'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_penukaranpoin' => 'required|min:4',
            'id_poin' => 'required|min:3',
        ]);

        PenukaranPoin::create([
            'id_penukaranpoin' => $request->id_penukaranpoin,
            'id_poin' => $request->id_poin,
        ]);

        return redirect('penukaran-poin')->with('Success', 'Data Berhasil DiTambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_penukaranpoin)
    {
        $poin = Poin::all();
        $penukaranpoin = PenukaranPoin::find($id_penukaranpoin);
        return view('admin.penukaran-poin.penukaran-poin-edit', compact('penukaranpoin','poin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_penukaranpoin)
    {
        $penukaranpoin = PenukaranPoin::find($id_penukaranpoin);
        $penukaranpoin->update($request->all());
        return redirect()->route('penukaran-poin')->with('Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_penukaranpoin)
    {
        $penukaranpoin = PenukaranPoin::find($id_penukaranpoin);
        $penukaranpoin->delete();
        return redirect()->route('penukaran-poin');
    }

    public function exportpdf(){
        $data = PenukaranPoin::all();
        $PDF = PDF::loadView('admin/penukaran-poin/penukaran-poin-cetak', array('data' => $data))->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-penukaran-poin.pdf');
    }
}
