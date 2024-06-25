<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ArtikelController extends Controller
{
    public function artikelpage() {
        return view('artikel');
    }
}