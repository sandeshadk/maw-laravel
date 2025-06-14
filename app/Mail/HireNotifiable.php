<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class HireNotifiable extends Mailable
{
    use Queueable, SerializesModels;

    protected $hire;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $hire)
    {
        $this->hire = $hire;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->hire['email'], $this->hire['firstName'].' '. $this->hire['lastName'])
            ->view('frontend.mail.quick-hire')
            ->subject('Hire Graduates Email')
            ->with(['hire_businessName' => $this->hire['businessName'],
                'hire_businessAddress' =>$this->hire['businessAddress'],
                'hire_phone' =>$this->hire['phone'],
                'hire_graduatesNumber' =>$this->hire['graduatesNumber'],
                'hire_graduate' =>$this->hire['graduate'],
            ]);
    }
}
