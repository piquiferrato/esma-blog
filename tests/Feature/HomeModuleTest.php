<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HomeModuleTest extends TestCase
{

/** @test*/

    function loadsHomePage()
    {
        $this->get('/home')
          ->assertStatus(200);
    }

/** @test*/

    function loadsDefaultLaravelPage()
    {
        $this->get('/')
        ->assertStatus(200);
    }
}
