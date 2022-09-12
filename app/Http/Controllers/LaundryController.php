<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\NamaPaket;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaundryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('laundry');
    }
}
