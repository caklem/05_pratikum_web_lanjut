<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        return view(('profile'))
        ->with('Nama', 'Mohammad Halim Perdana')
        ->with('Jurusan', 'Teknik Informatika')
        ->with('Nim', '2141720236')
        ->with('Kelas', 'TI - 2H')
        ->with('Absen', '20');
    }
}
