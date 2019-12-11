<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersCanCreatePostsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testUsersCanCreatePoststest()
    {
        $this->visit('posts/create')
    ->type('Mi pirimer post', 'title')
    ->type('Contenido de mi primer post','body')
    ->press('publicar')
    ->seePageIs('blog')
    ->click('Mi primer Post')
    ->see('Contenido de mi primer post');
    }
}
