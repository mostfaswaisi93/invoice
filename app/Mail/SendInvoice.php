<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendInvoice extends Mailable
{
    use Queueable, SerializesModels;

    public $invoice;

    public function __construct($invoice)
    {
        $this->invoice = $invoice;
    }

    public function build()
    {
        return $this->subject(__('Emails/emails.new_invoice'))->view('emails.send_invoice')
            ->attach(public_path('assets/invoices/') . $this->invoice->invoice_number . '.pdf')
            ->with(['invoice' => $this->invoice]);
    }
}
