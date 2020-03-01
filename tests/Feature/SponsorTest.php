<?php

namespace Tests\Feature;

use App\Mail\SponsorshipMail;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class SponsorTest extends TestCase
{
    /** @test */
    public function guest_cannot_create_sponsor_with_invalid_params()
    {
        $this->withExceptionHandling();

        $this->postJson(route('sponsor.store'))
            ->assertStatus(422);
    }

    /** @test */
    public function guest_can_create_sponsor()
    {
        Mail::fake();

        $this->postJson(route('sponsor.store'), [
            'name' => 'Felipe',
            'email' => 'felipe@test.com',
        ])->assertStatus(200);

        Mail::assertSent(SponsorshipMail::class);
    }
}
