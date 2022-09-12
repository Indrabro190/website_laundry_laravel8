<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function index()
    {
        $data = Customer::all();
        return view('customer.datacustomer', compact('data'));
    }

    public function customer()
    {
        return view('customer.datacustomer');
    }
    public function datacustomer(Request $request)
    {
        $data = Customer::where('status', '1')->get();
        return view('customer.datacustomer', compact('data'));
    }


    // public function datacustomer()
    // {
    //     return view('datacustomer');
    // }

    public function store(Request $request)
    {
        Customer::create([
            'namecustomer' => $request->namecustomer,
            'alamat' => $request->alamat,
            'jeniskelamin' => $request->jeniskelamin,
            'notelepon' => $request->notelepon,
            'status' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            // 'update_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect('/datacustomer')->with('success', 'Data Berhasil Disimpan');
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);
        $customer->namecustomer = $request->namecustomer;
        $customer->alamat = $request->alamat;
        $customer->jeniskelamin = $request->jeniskelamin;
        $customer->notelepon = $request->notelepon;
        // $customer->update_at = date('Y-m-d H:i:s');

        $customer->save();

        return redirect('/datacustomer')->with('success', 'Data Berhasil Diubah');
    }

    public function destroy($id)
    {
        $tipepaket = Customer::find($id);
        $tipepaket->delete();

        return redirect('/datacustomer')->with('success', 'Data Berhasil Diubah');
    }

    public function deletecustomer($id)
    {
        $data = Customer::find($id);
        $data->status= '0';
        $data->save();
        
        return redirect()->route('datacustomer')->with('success', 'Data Berhasil Di hapus');
    }
    public function deletepermanen($id)
    {
        $data = Customer::find($id);
        $data->status= '1';
        $data->delete();
        $data->save();
        
        return redirect()->route('datacustomer')->with('success', 'Data Berhasil Di hapus');
    }
}
