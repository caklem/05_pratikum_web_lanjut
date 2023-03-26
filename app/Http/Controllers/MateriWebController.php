<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MateriWebController extends Controller
{
    public function index()
    {
        return view('materi_web',['materi_web'=>Web::tampil()]);
    }
}
