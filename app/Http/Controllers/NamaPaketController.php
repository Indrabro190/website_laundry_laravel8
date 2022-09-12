<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\NamaPaket;
use App\Models\TipePaket;
use Illuminate\Http\Request;

class NamaPaketController extends Controller
{
    public function index()
    {
        return view('admin.master.namapaket.datapaket');
    }

    public function deletepaket($id)
    {
        $data = NamaPaket::find($id);
        $data->delete();
        return redirect()->route('datapaket')->with('success', 'Data Berhasil Di hapus');
    }

    public function datapaket(){
        $namapaket = NamaPaket::with('tipepaket')->get();
        $tipepaket = TipePaket::all();
        return view('admin.master.namapaket.datapaket', compact('namapaket','tipepaket'));
    }

    public function store(Request $request){
        NamaPaket::create([
            'tipepaket_id' => $request->tipepaket_id,
            'namepaket' => $request->namepaket,
            'created_at' => date('Y-m-d H:i:s'),
            // 'update_at' => date('Y-m-d H:i:s'),
        ]);
        return redirect('/datapaket')->with('success', 'Data Berhasil Disimpan');
    }

    public function update(Request $request, $id)
    {
        $paket = NamaPaket::find($id);
        $paket->tipepaket_id = $request->tipepaket_id;
        $paket->namepaket = $request->namepaket;
        // $paket->update_at = date('Y-m-d H:i:s');

        $paket->save();

        return redirect('/datapaket')->with('success', 'Data Berhasil Diubah');
    }

    public function destroy($id)
    {
        $paket = NamaPaket::find($id);
        $paket->delete();

        return redirect('/datapaket')->with('success', 'Data Berhasil Diubah');
    }
}
