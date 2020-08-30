<?php

namespace App\Models;

class Invoice extends BaseModel
{
    protected $guarded = [];
    protected $table = 'invoices';

    public function details()
    {
        return $this->hasMany(InvoiceDetails::class, 'invoice_id', 'id');
    }

    public function discountResult()
    {
        return $this->discount_type == 'fixed' ? $this->discount_value : $this->discount_value . '%';
    }
}
