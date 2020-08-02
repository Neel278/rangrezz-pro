<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PaintingSold extends Mailable
{
    use Queueable, SerializesModels;

    public $painting;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($painting)
    {
        $this->painting = $painting;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.painting_sold');
    }
}
