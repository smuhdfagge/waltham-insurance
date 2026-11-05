<?php

namespace App\Livewire;

use App\Mail\ContactEnquiry;
use App\Models\ContactSubmission;
use App\Models\Service;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{
    /** Enquiry types used by links across the site (e.g. "Request a proposal"). */
    public const GENERAL_OPTIONS = ['Request a proposal', 'Claim notification', 'Existing policy', 'General enquiry'];

    public $name = '';
    public $email = '';
    public $phone = '';
    public $service = '';
    public $message = '';
    public $website = '';
    public $successMessage = '';

    protected $rules = [
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'email', 'max:255'],
        'phone' => ['nullable', 'string', 'max:30'],
        'service' => ['nullable', 'string', 'max:150'],
        'message' => ['required', 'string', 'min:10', 'max:2000'],
        'website' => ['nullable', 'max:0'],
    ];

    /**
     * Pre-select the enquiry type from links such as /contact?service=Motor%20Insurance.
     */
    public function mount(): void
    {
        $requested = (string) request()->query('service', '');

        if ($requested !== '' && in_array($requested, $this->enquiryOptions(), true)) {
            $this->service = $requested;
        }
    }

    /**
     * Every product title, plus the general enquiry types used by site links.
     */
    public function enquiryOptions(): array
    {
        return array_merge(
            Service::orderBy('sort_order')->pluck('title')->all(),
            self::GENERAL_OPTIONS,
        );
    }

    public function submitForm()
    {
        $this->validate();

        if (! empty($this->website)) {
            return;
        }

        $submission = ContactSubmission::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone ?? '',
            'service' => $this->service,
            'message' => $this->message,
            'status' => 'new',
        ]);

        Mail::to(config('company.email'))->queue(new ContactEnquiry($submission));

        $this->reset(['name', 'email', 'phone', 'service', 'message', 'website']);
        $this->successMessage = 'Thank you. Your message has been sent and a member of our team will be in touch shortly.';
    }

    public function render()
    {
        return view('livewire.contact-form', [
            'products' => Service::orderBy('sort_order')->pluck('title'),
            'generalOptions' => self::GENERAL_OPTIONS,
        ]);
    }
}
