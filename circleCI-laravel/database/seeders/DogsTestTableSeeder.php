<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;

class DogsTestTableSeeder extends Seeder
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
            'area_id' => '100',
        ];
        DB::table('dogs')->insert($param);
        $param = [
            'name' => 'test2',
            'area_id' => '200',
        ];
        DB::table('dogs')->insert($param);
        $param = [
            'name' => 'test3',
            'area_id' => '300',
        ];
        DB::table('dogs')->insert($param);
        if (App::environment('testing'))
        {
            $param = [
            'name' => 'env_test',
            'area_id' => '4000',
            ];
            DB::table('dogs')->insert($param);
        }
    }
}
