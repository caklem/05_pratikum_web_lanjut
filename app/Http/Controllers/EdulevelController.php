<?php

namespace App\Http\Controllers;
use App\Models\ExampleModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class EdulevelController extends Controller
{
    
    public function data1()
    {
        $materidata = DB::table('materi_web')->get();
        // return $materidata;
        return view('materi.datamateri', ['materi' => $materi]);
    }
}
