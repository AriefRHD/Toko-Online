<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function berandaBackend()
    {
        return view('backend.v_beranda.index',[
            'judul' => 'Halaman Beranda',
        ]);
    }
}
