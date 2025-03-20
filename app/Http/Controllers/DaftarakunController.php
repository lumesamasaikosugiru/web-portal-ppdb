<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarakunController extends Controller
{
    public function daftarakun()
    {

        return view('pages.auth.daftar');
    }
}
