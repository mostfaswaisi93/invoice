<?php

namespace App\Models;

class InvoiceDetails extends BaseModel
{
    protected $guarded = [];

    public function invoice()
    {
        return $this->belongsTo(Invoice::class, 'invoice_id', 'id');
    }

    public function unitText()
    {
        if ($this->unit == 'piece') {
            $text = __('site.piece');
        } elseif ($this->unit == 'g') {
            $text = __('site.gram');
        } elseif ($this->unit == 'kg') {
            $text = __('site.kilo_gram');
        }

        return $text;
    }
}
