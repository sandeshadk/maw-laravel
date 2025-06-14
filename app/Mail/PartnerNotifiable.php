<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PartnerNotifiable extends Mailable
{
    use Queueable, SerializesModels;

    protected $partner;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $partner)
    {
        $this->partner = $partner;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->partner['email'], $this->partner['firstName'].' '.$this->partner['lastName'])
            ->view('frontend.mail.quick-partner')
            ->subject('Partner with Academy Email')
            ->with(['partner_businessName' => $this->partner['businessName'],
                'partner_businessAddress' =>$this->partner['businessAddress'],
                'partner_phone' =>$this->partner['phone'],
                'partner_message' =>$this->partner['message']
            ]);
    }
}
