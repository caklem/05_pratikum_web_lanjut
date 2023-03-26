<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class MateriWebSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[[
            'id' => 1,
            'nama_Materi' => 'View'
        ],[
            'id' => 2,
            'nama_Materi' => 'Routing'
        ],[
            'id' => 3,
            'nama_Materi' => 'Model'
        ],[
            'id' => 4,
            'nama_Materi' => 'Authentikasi'
        ],[
            'id' => 5,
            'nama_Materi' => 'Controller'
        ]];            
    DB::table('materi_web')->insert($data);

    }
}
