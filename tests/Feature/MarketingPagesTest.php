<?php

namespace Tests\Feature;

use App\Livewire\ContactForm;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
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
        $response->assertSeeText('Group Life Assurance');
    }

    public function test_services_page_renders(): void
    {
        $response = $this->get('/services');

        $response->assertOk();
        $response->assertSeeText('Group Life Assurance');
        $response->assertSeeText('Marine Hull and Cargo');
    }

    public function test_service_detail_page_renders_markdown_description(): void
    {
        $response = $this->get('/services/motor-insurance');

        $response->assertOk();
        $response->assertSeeText('ECOWAS Brown Card Scheme');
        $response->assertSee('<h3>Premium rebates can be granted when</h3>', false);
    }

    public function test_unknown_service_returns_404(): void
    {
        $this->get('/services/does-not-exist')->assertNotFound();
    }

    public function test_contact_page_renders(): void
    {
        $response = $this->get('/contact');

        $response->assertOk();
        $response->assertSeeText('Head office');
        $response->assertSeeText('info@waltham.com.ng');
    }

    public function test_contact_form_preselects_the_requested_service(): void
    {
        Livewire::withQueryParams(['service' => 'Motor Insurance'])
            ->test(ContactForm::class)
            ->assertSet('service', 'Motor Insurance');
    }

    public function test_directors_and_management_pages_list_the_right_people(): void
    {
        $this->get('/directors')
            ->assertOk()
            ->assertSeeText('Alhaji Bashir Ahmed')
            ->assertDontSeeText('Mohammed Salau');

        $this->get('/management')
            ->assertOk()
            ->assertSeeText('Mohammed Salau')
            ->assertSeeText('Coventry University')
            ->assertDontSeeText('Alhaji Bashir Ahmed');
    }

    public function test_company_pages_render(): void
    {
        foreach (['/about', '/what-we-do', '/vision-mission', '/proposal', '/claims'] as $uri) {
            $this->get($uri)->assertOk();
        }
    }

    public function test_previous_urls_redirect(): void
    {
        $this->get('/our-team')->assertRedirect('/management');
        $this->get('/gallery')->assertRedirect('/directors');
    }
}
