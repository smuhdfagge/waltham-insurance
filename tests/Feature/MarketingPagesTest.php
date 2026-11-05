<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MarketingPagesTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->seed();
    }

    public function test_homepage_renders(): void
    {
        $response = $this->get('/');

        $response->assertOk();
        $response->assertSeeText('Waltham Insurance Brokers Ltd');
    }

    public function test_services_page_renders(): void
    {
        $response = $this->get('/services');

        $response->assertOk();
        $response->assertSeeText('Group Life Assurance');
    }

    public function test_contact_page_renders(): void
    {
        $response = $this->get('/contact');

        $response->assertOk();
        $response->assertSeeText('Head Office');
    }

}
