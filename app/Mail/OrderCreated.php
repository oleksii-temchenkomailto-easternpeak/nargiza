<?php

namespace App\Mail;

use App\MessageTemplate;
use App\Payer;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderCreated extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var
     */
    public $data;
    /**
     * @inheritdoc
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * @return $this
     */
    public function build()
    {
        return $this->buildTemplate();
    }

    /**
     * @return $this
     */
    public function buildTemplate(): self
    {
        $this->from(env('MAIL_FROM_ADDRESS', 'email@temenb.fun'), 'temenb.fun');
        $this->subject('subject');

        $this->html(var_export($this->data, true));
        return $this;
    }
}
