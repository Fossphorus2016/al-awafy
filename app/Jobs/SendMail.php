<?php

namespace App\Jobs;

use App\Mail\ContactMail;
use App\Mail\NewsletterMail;
use App\Mail\UserConfirmationContactMail;
use App\Mail\UserconfirmationNewsletterMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $data;
    protected $form_type;

    /**
     * Create a new job instance.
     */
    public function __construct($data, $form_type,)
    {
        $this->data = $data;
        $this->form_type = $form_type;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        switch ($this->form_type) {
            case 'contact':

                Mail::to('info@alawafy.com')->send(new ContactMail($this->data));
                Mail::to($this->data['email'])->send(new UserConfirmationContactMail($this->data));
                break;

            case 'newsletter':

                Mail::to('info@alawafy.com')->send(new NewsletterMail($this->data));
                Mail::to($this->data['subscriber_mail'])->send(new UserconfirmationNewsletterMail($this->data));

                break;
            default:
                // Add more cases as needed for other form types.
                break;
        }
    }
}
