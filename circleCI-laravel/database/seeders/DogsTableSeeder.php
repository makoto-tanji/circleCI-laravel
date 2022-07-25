<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;

class DogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'test1',
            'area_id' => '1',
        ];
        DB::table('dogs')->insert($param);
        $param = [
            'name' => 'test2',
            'area_id' => '2',
        ];
        DB::table('dogs')->insert($param);
        $param = [
            'name' => 'test3',
            'area_id' => '3',
        ];
        DB::table('dogs')->insert($param);
        if (App::environment('test'))
        {
            $param = [
            'name' => 'env_test',
            'area_id' => '4',
            ];
            DB::table('dogs')->insert($param);
        }
    }
}
