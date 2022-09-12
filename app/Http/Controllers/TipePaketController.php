<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\TipePaket;
use Illuminate\Http\Request;

class TipePaketController extends Controller
{
    public function index()
    {
        return view('admin.master.tipepaket.datatipepaket');
    }

    public function deletetipe($id)
    {
        $data = TipePaket::find($id);
        $data->delete();
        return redirect()->route('datatipepaket')->with('success', 'Data Berhasil Di hapus');
    }

    public function datatipepaket(Request $request){
        // $tipepaket = TipePaket::orderBy('customer', 'ASC')->paginate(5);
        $tipepaket = TipePaket::all();
        return view('admin.master.tipepaket.datatipepaket', compact('tipepaket'));
    }

    public function store(Request $request){
        TipePaket::create([
            'nametipe' => $request->nametipe,
            'created_at' => date('Y-m-d H:i:s'),
            // 'update_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect('/datatipepaket')->with('success', 'Data Berhasil Disimpan');
    }

    public function update(Request $request, $id)
    {
        $tipepaket = TipePaket::find($id);
        $tipepaket->nametipe = $request->nametipe;
        // $tipepaket->update_at = date('Y-m-d H:i:s');

        $tipepaket->save();

        return redirect('/datatipepaket')->with('success', 'Data Berhasil Diubah');
    }

    public function destroy($id)
    {
        $tipepaket = TipePaket::find($id);
        $tipepaket->delete();

        return redirect('/datatipepaket')->with('success', 'Data Berhasil Diubah');
    }
}
