<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RentBikeTest extends TestCase
{
    /**
     * @test
     */
    function testHourRentOk()
    {
        $this->get('/hourRent/3')
            ->assertStatus(200)
            ->assertSee('Alquiler ok');

    }

    /**
     * @test
     */
    function testDayRentOk()
    {
        $this->get('/dayRent/2')
            ->assertStatus(200)
            ->assertSee('Alquiler ok');

    }

    /**
     * @test
     */
    function testWeekRentOk()
    {
        $this->get('/weekRent/2')
            ->assertStatus(200)
            ->assertSee('Alquiler ok');

    }

    /**
     * @test
     */
    function testHourFamilyRentOk()
    {
        $this->get('/hourRent/3/true')
            ->assertStatus(200)
            ->assertSee('Alquiler ok');

    }

    /**
     * @test
     */
    function testDayFamilyRentOk()
    {
        $this->get('/dayRent/5/true')
            ->assertStatus(200)
            ->assertSee('Alquiler ok');

    }

    /**
     * @test
     */
    function testWeekFamilyRentOk()
    {
        $this->get('/weekRent/4/true')
            ->assertStatus(200)
            ->assertSee('Alquiler ok');

    }


    /**
     * @test
     */
    function testWeekFamilyRentFailure()
    {
        $this->get('/weekRent/2/true')
            ->assertStatus(200)
            ->assertSee('No corresponde descuento familiar');

    }

    /**
     * @test
     */
    function testHourFamilyRentFailure()
    {
        $this->get('/hourRent/1/true')
            ->assertStatus(200)
            ->assertSee('No corresponde descuento familiar');

    }

    /**
     * @test
     */
    function testDayFamilyRentFailure()
    {
        $this->get('/dayRent/8/true')
            ->assertStatus(200)
            ->assertSee('No corresponde descuento familiar');

    }
}
