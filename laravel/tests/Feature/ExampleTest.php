<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {

        $this->assertTrue(true);

    }

    public function testAdmin()
    {
        $admin=User::where('type','admin')->get();
        $count=$admin->count();
        $this->assertGreaterThan(0,$count);
    }



}
