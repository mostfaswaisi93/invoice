<?php

namespace App\Models;

class Invoice extends BaseModel
{
    // protected $fillable = [
    //     'customer_name', 'customer_email', 'customer_mobile', 'company_name', 'invoice_number', 'invoice_date',
    //     'sub_total', 'discount_type', 'discount_value', 'vat_value', 'shipping', 'total_due'
    // ];

    protected $guarded = [];

    public function details()
    {
        return $this->hasMany(InvoiceDetails::class, 'invoice_id', 'id');
    }

    public function discountResult()
    {
        return $this->discount_type == 'fixed' ? $this->discount_value : $this->discount_value . '%';
    }
}
