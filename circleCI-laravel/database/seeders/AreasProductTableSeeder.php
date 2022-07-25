<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class AreasProductTableSeeder extends Seeder
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
            'area_name' => 'productpark1'
        ];
        DB::table('areas')->insert($param);
        $param = [
            'area_name' => 'productpark2'
        ];
        DB::table('areas')->insert($param);
        $param = [
            'area_name' => 'productpark3'
        ];
        DB::table('areas')->insert($param);
    }
}
