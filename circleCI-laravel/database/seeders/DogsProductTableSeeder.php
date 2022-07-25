<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class DogsProductTableSeeder extends Seeder
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
            'name' => 'test1',
            'area_id' => '4',
        ];
        DB::table('dogs')->insert($param);
        $param = [
            'name' => 'test2',
            'area_id' => '14',
        ];
        DB::table('dogs')->insert($param);
        $param = [
            'name' => 'test3',
            'area_id' => '24',
        ];
        DB::table('dogs')->insert($param);
    }
}
