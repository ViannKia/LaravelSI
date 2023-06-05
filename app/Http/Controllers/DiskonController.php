<?php

namespace App\Http\Controllers;

use App\Models\Diskon;
use App\Models\PenukaranPoin;
use Illuminate\Http\Request;
use PDF;

class DiskonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $diskon = Diskon::orderBy('id_diskon', 'DESC')->get();
        return view('admin.diskon.diskon', compact('diskon'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $penukaranpoin = PenukaranPoin::all();
        $diskon = new Diskon();
        return view('admin.diskon.diskon-entry', compact(
            'diskon','penukaranpoin'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_diskon' => 'required|min:4',
            'id_penukaranpoin' => 'required|min:3',
            'total_diskon' => 'required|min:1',
        ]);

        Diskon::create([
            'id_diskon' => $request->id_diskon,
            'id_penukaranpoin' => $request->id_penukaranpoin,
            'total_diskon' => $request->total_diskon,
        ]);

        return redirect('diskon')->with('Success', 'Data Berhasil DiTambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_diskon)
    {
        $penukaranpoin = PenukaranPoin::all();
        $diskon = Diskon::find($id_diskon);
        return view('admin.diskon.diskon-edit', compact('diskon','penukaranpoin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_diskon)
    {
        $diskon = Diskon::find($id_diskon);
        $diskon->update($request->all());
        return redirect()->route('diskon')->with('Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_diskon)
    {
        $diskon = Diskon::find($id_diskon);
        $diskon->delete();
        return redirect()->route('diskon');
    }

    public function exportpdf(){
        $data = Diskon::all();
        $PDF = PDF::loadView('admin/diskon/diskon-cetak', array('data' => $data))->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-diskon.pdf');
    }
}
