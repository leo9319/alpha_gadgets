<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($client_data)
    {
        $this->client_data = $client_data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('alpha.gadgets007@gmail.com')
                    ->subject('iPhone Pre Order')
                    ->view('emails.order_confirmation')
                    ->with(['client_data' => $this->client_data]);
    }
}
