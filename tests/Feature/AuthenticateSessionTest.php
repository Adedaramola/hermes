<?php

declare(strict_types=1);

namespace Tests\Feature;

use Tests\TestCase;

final class AuthenticateSessionTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_login_screen_can_be_rendered(): void
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }
}
