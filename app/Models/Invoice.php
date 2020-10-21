<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Invoice extends BaseModel
{
    use HasFactory;

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
