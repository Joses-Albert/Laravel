<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PsikotesController extends Controller
{
    public function psikotespage() {
        return view('psikotes');
    }
}
