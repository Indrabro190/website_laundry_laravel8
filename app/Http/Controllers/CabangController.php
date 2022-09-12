<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Models\Cabang;
use Illuminate\Http\Request;

class CabangController extends Controller
{
    public function index(Request $request){
        $data = Cabang::all();
        return view('admin.master.cabang.datacabang', compact('data'));
    }

    public function datacabang(Request $request){
        $data = Cabang::all();
        return view('admin.master.cabang.datacabang',compact('data'));
    }

    public function store(Request $request){
        Cabang::create([
            'namecabang' => $request->namecabang,
            'created_at' => date('Y-m-d H:i:s'),
            // 'update_at' => date('Y-m-d H:i:s'),
        ]);
        return redirect('/datacabang')->with('success', 'Data Berhasil Disimpan');
    }

    public function update(Request $request, $id)
    {
        $cabang = Cabang::find($id);
        $cabang->namecabang = $request->namecabang;
        // $cabang->update_at = date('Y-m-d H:i:s');

        $cabang->save();

        return redirect('/datacabang')->with('success', 'Data Berhasil Diubah');
    }

    public function destroy($id)
    {
        $cabang = Cabang::find($id);
        $cabang->delete();

        return redirect('/datacabang')->with('success', 'Data Berhasil Diubah');
    }
}
