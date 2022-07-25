<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class AreasTestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $param = [
            'area_name' => 'testpark1'
        ];
        DB::table('areas')->insert($param);
        $param = [
            'area_name' => 'testpark2'
        ];
        DB::table('areas')->insert($param);
        $param = [
            'area_name' => 'testpark3'
        ];
        DB::table('areas')->insert($param);
    }
}
