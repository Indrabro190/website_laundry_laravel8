<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Cabang;
use App\Models\Customer;
use App\Models\NamaPaket;
use App\Models\TipePaket;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TransaksiController extends Controller
{
    public function index()
    {
        // $data = Transaksi::all();
        $transaksi = Transaksi::with('tipepaket', 'customer', 'cabang', 'namapaket')->get();
        $tipepaket = TipePaket::all();
        $customer = Customer::where('status', '1')->get();
        $cabang = Cabang::all();
        $namapaket = NamaPaket::all();
        $total_bayar = Transaksi::where('total_bayar')->count();
        return view('admin.laporan.transaksi.transaksi', compact('transaksi', 'tipepaket', 'customer', 'cabang', 'namapaket','total_bayar'));
    }

    public function dashboard()
    {
        $transaksi = Transaksi::all();
        $customer = Customer::where('status', '1')->get()->count();
        $user = User::count();
        $paket = NamaPaket::count();

        $total_bayar = Transaksi::select(DB::raw("CAST(SUM(total_bayar) as int) as total_bayar"))
            ->GroupBy(DB::raw("Month(created_at)"))
            ->pluck('total_bayar');

        $bulan = Transaksi::select(DB::raw("MONTHNAME(created_at) as bulan"))
            ->GroupBy(DB::raw("MONTHNAME(created_at)"))
            ->pluck('bulan');

        $total_bayar1 = Transaksi::select(DB::raw("CAST(SUM(total_bayar) as int) as total_bayar"))
            ->GroupBy(DB::raw("Day(created_at)"))
            ->pluck('total_bayar');

        $harian = Transaksi::select(DB::raw("DAYNAME(created_at) as harian"))
            ->GroupBy(DB::raw("DAYNAME(created_at)"))
            ->pluck('harian');
        return view('dashboard', compact('transaksi', 'customer', 'user', 'paket', 'total_bayar', 'total_bayar1', 'bulan', 'harian'));
    }


    public function store(Request $request)
    {
        Transaksi::create([

            'cabang_id' => $request->cabang_id,
            'customer_id' => $request->customer_id,
            'tipepaket_id' => $request->tipepaket_id,
            'namapaket_id' => $request->namapaket_id,
            'tanggalselesai' => $request->tanggalselesai,
            'jumlah' => $request->jumlah,
            'berat' => $request->berat,
            'total_bayar' => $request->total_bayar,
            'created_at' => date('Y-m-d H:i:s'),

        ]);

        return redirect('/transaksi')->with('success', 'Data Berhasil Disimpan');
    }

    public function update(Request $request, $id)
    {
        $transaksi = Transaksi::find($id);
        $transaksi->cabang_id = $request->cabang_id;
        $transaksi->customer_id = $request->customer_id;
        $transaksi->tipepaket_id = $request->tipepaket_id;
        $transaksi->namapaket_id = $request->namapaket_id;
        $transaksi->jumlah = $request->jumlah;
        $transaksi->berat = $request->berat;
        $transaksi->total_bayar = $request->total_bayar;
        $transaksi->save();


        // $tipepaket = TipePaket::find($id);
        // $tipepaket->nametipe = $transaksi['nametipe'];
        // $tipepaket->save();

        // $namapaket = NamaPaket::find($id);
        // $namapaket->namepaket = $request->namepaket;

        // $namapaket->save();

        // $customer = Customer::find($id);
        // $customer->namecustomer = $request->namecustomer;

        // $customer->save();

        // $cabang = Cabang::find($id);
        // $cabang->namecabang = $request->namecabang;

        // $cabang->save();


        return redirect('/transaksi')->with('success', 'Data Berhasil Diubah');
    }

    public function delete($id)
    {
        $data = Transaksi::where('id', $id)->delete();
        return redirect()->route('transaksi')->with('success', 'Data Berhasil Di hapus');
    }
}
