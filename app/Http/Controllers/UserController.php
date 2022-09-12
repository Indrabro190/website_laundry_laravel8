<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

date_default_timezone_set('Asia/Jakarta');

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return view('admin.master.user.user', compact('user'));
    }

    public function delete($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect()->route('user')->with('success', 'Data Berhasil Di hapus');
    }

    public function user(){
        return view('user');
    }

    public function store(Request $request){
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'level' => $request->level,
            'created_at' => date('Y-m-d H:i:s'),
            // 'update_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect('/user')->with('success', 'Data Berhasil Disimpan');
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password); 
        $user->level = $request->level;
        // $user->update_at = date('Y-m-d H:i:s');

        $user->save();

        return redirect('/user')->with('success', 'Data Berhasil Diubah');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('/user')->with('success', 'Data Berhasil Diubah');
    }
    

    public function dataprofile(){
        $user = User::all();
        return view('dataprofile', compact('user'));
    }

    // public function ubah(Request $request, $id)
    // {
    //     $user = User::find($id);
    //     $user->name = $request->name;
    //     $user->email = $request->email;
    //     $user->password = Hash::make($request->password); 
    //     $user->level = $request->level;
    //     // $user->update_at = date('Y-m-d H:i:s');

    //     $user->save();

    //     return redirect('/dataprofile')->with('success', 'Data Berhasil Diubah');
    // }
}
