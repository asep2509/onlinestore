<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class testHomepage extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $page = new HomepageController();
        $hasil = $page->jumlah(2,2);
        $this->assertEquals(2, $hasil);
    }
}
