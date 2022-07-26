<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AreaTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testArea()
    {
        $this->assertDatabaseHas('areas',[
            'area_name' => 'testpark1'
        ]);
        $this->assertDatabaseHas('areas',[
            'area_name' => 'testpark2'
        ]);
    }
}
