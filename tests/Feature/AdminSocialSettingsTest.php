<?php

namespace Tests\Feature;

use App\Models\SiteSetting;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminSocialSettingsTest extends TestCase
{
    use RefreshDatabase;

    public function test_guests_cannot_manage_social_settings(): void
    {
        $this->get('/admin/settings/social')->assertRedirect(route('login', absolute: false));
        $this->put('/admin/settings/social', [])->assertRedirect(route('login', absolute: false));
    }

    public function test_admin_can_view_the_settings_page(): void
    {
        $this->actingAs(User::factory()->create())
            ->get('/admin/settings/social')
            ->assertOk()
            ->assertSeeText('Social media & WhatsApp')
            ->assertSeeText('LinkedIn')
            ->assertSeeText('WhatsApp number');
    }

    public function test_saved_links_and_whatsapp_appear_on_the_public_site(): void
    {
        $this->actingAs(User::factory()->create())
            ->put('/admin/settings/social', [
                'social_facebook' => 'https://facebook.com/waltham',
                'social_x' => 'https://x.com/waltham',
                'social_linkedin' => 'https://linkedin.com/company/waltham',
                'whatsapp_number' => '0803 661 3580',
                'whatsapp_message' => 'Hello Waltham',
                'whatsapp_button' => '1',
            ])
            ->assertRedirect('/admin/settings/social')
            ->assertSessionHas('status');

        $this->assertSame('https://x.com/waltham', SiteSetting::where('key', 'social_x')->value('value'));

        $this->get('/')
            ->assertOk()
            ->assertSee('href="https://facebook.com/waltham"', false)
            ->assertSee('href="https://linkedin.com/company/waltham"', false)
            ->assertSee('https://wa.me/2348036613580?text=Hello%20Waltham', false)
            ->assertSee('aria-label="Chat with us on WhatsApp"', false);

        $this->get('/contact')->assertSeeText('Chat on WhatsApp');
    }

    public function test_floating_button_can_be_turned_off(): void
    {
        $this->actingAs(User::factory()->create())->put('/admin/settings/social', [
            'whatsapp_number' => '+234 806 771 3959',
            'whatsapp_button' => '0',
        ]);

        $this->get('/')
            ->assertSee('https://wa.me/2348067713959', false)
            ->assertDontSee('aria-label="Chat with us on WhatsApp"', false);
    }

    public function test_clearing_a_link_hides_it(): void
    {
        $user = User::factory()->create();
        $this->actingAs($user)->put('/admin/settings/social', ['social_facebook' => 'https://facebook.com/waltham']);
        $this->actingAs($user)->put('/admin/settings/social', ['social_facebook' => '']);

        $this->get('/')->assertDontSee('facebook.com/waltham', false);
    }

    public function test_invalid_values_are_rejected(): void
    {
        $this->actingAs(User::factory()->create())
            ->from('/admin/settings/social')
            ->put('/admin/settings/social', [
                'social_facebook' => 'javascript:alert(1)',
                'whatsapp_number' => 'call me',
            ])
            ->assertRedirect('/admin/settings/social')
            ->assertSessionHasErrors(['social_facebook', 'whatsapp_number']);

        $this->assertSame(0, SiteSetting::count());
    }
}
