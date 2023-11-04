<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SongTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testSongs(): void
    {
        $response = $this->get('/songs');

        $response->assertStatus(200);
    }

    /**
     * Feature test to check song titles.
     */
    public function testSongTitles(): void
    {
        $response = $this->get('/songs');

        $response->assertStatus(200);
        $response->assertSee('Nothing Else Matters');
        $response->assertSee('Stan');
    }

}
