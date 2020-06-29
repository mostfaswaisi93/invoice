<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        $invoices = Invoice::orderBy('id', 'desc')->paginate(10);

        // return view('admin.invoices.index', compact('invoices'));
        return view('admin.invoices.index')->with('invoices', $invoices);
    }
}
