<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TransactionSuccess extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    private $transaction;
    private $user;
    private $total;
    public function __construct($transaction, $user, $total)
    {
        //
        $this->transaction = $transaction;
        $this->user = $user;
        $this->total = $total;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.transaction')->with(['transaction' => $this->transaction, 'user' => $this->user, 'total' => $this->total]);
    }
}
