<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        return view('beranda');
    }
    // public function showDataPengguna()
    // {
    //     $data['users'] = User::all();
    //     return view('data_pengguna',$data);
    // }
}
