<?php

namespace App\Models;

class InvoiceDetails extends BaseModel
{
    protected $guarded = [];
    protected $table = 'invoice_details';

    public function invoice()
    {
        return $this->belongsTo(Invoice::class, 'invoice_id', 'id');
    }

    public function unitText()
    {
        if ($this->unit == 'piece') {
            $text = trans('admin.piece');
        } elseif ($this->unit == 'g') {
            $text = trans('admin.gram');
        } elseif ($this->unit == 'kg') {
            $text = trans('admin.kilo_gram');
        }

        return $text;
    }
}
