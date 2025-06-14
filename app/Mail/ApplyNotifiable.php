<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ApplyNotifiable extends Mailable
{
    use Queueable, SerializesModels;

    protected $apply;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $apply)
    {
        $this->apply = $apply;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->apply['email'], $this->apply['name'])
            ->view('frontend.mail.quick-apply')
            ->subject('Apply Course Email')
            ->with(['apply_address' => $this->apply['address'],
                'apply_phone' =>$this->apply['phone'],
                'apply_course' =>$this->apply['course'],
                'apply_location' =>$this->apply['location']
                ]);
    }
}
