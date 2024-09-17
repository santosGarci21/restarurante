<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class usuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         //
         $data = array([
            'nombre'=>'Juan',
            'email'=>'juan@gmail.com',
            'password'=>'juan22',
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'luis',
            'email'=>'juan@gmail.com',
            'password'=>'juan22',
            'created_at'=>Carbon::now()
        ]);
        
        DB::table('usuarios')->insert($data);
    }
}
