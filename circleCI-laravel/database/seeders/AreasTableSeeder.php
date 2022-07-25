<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class AreasTableSeeder extends Seeder
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
            'area_name' => 'park1'
        ];
        DB::table('areas')->insert($param);
        $param = [
            'area_name' => 'park2'
        ];
        DB::table('areas')->insert($param);
        $param = [
            'area_name' => 'park3'
        ];
        DB::table('areas')->insert($param);
    }
}
