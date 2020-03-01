<?php

namespace Tests\Feature;

use Tests\TestCase;

class SponsorTest extends TestCase
{
    /** @test */
    public function guest_or_expert_cannot_sponsor_with_invalid_params()
    {
        $this->withExceptionHandling();

        $this->postJson(route('sponsor.store'))
            ->assertStatus(422);
    }
}
