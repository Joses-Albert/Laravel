<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    public function pertanyaanpage() {
        return view('pertanyaan');
    }
}
