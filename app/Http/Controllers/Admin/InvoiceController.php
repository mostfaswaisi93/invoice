<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Mail\SendInvoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use PDF;

class InvoiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $invoices = Invoice::orderBy('id', 'desc');

        if (request()->ajax()) {
            return datatables()->of($invoices)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $button = '<button type="button" name="edit" id="' . $data->id . '" class="edit btn btn-primary btn-sm"><i class="feather icon-edit"></i></button>';
                    $button .= '&nbsp;&nbsp;';
                    $button .= '<button type="button" name="show" id="' . $data->id . '" class="show btn btn-info btn-sm"><i class="feather icon-eye"></i></button>';
                    $button .= '&nbsp;&nbsp;';
                    $button .= '<button type="button" name="delete" id="' . $data->id . '" class="delete btn btn-danger btn-sm"><i class="feather icon-trash"></i></button>';
                    return $button;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.invoices.index');
    }

    public function create()
    {
        return view('admin.invoices.create');
    }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'first_name'    => 'required',
    //         'last_name'     => 'required',
    //         'email'         => 'required|unique:users',
    //         'image'         => 'image',
    //         'password'      => 'required|confirmed',
    //         'permissions'   => 'required|min:1'
    //     ]);

    //     $request_data = $request->except(['password', 'password_confirmation', 'permissions', 'image']);
    //     $request_data['password'] = bcrypt($request->password);

    //     if ($request->image) {
    //         Image::make($request->image)
    //             ->resize(300, null, function ($constraint) {
    //                 $constraint->aspectRatio();
    //             })
    //             ->save(public_path('uploads/user_images/' . $request->image->hashName()));
    //         $request_data['image'] = $request->image->hashName();
    //     }

    //     $user = User::create($request_data);
    //     $user->attachRole('admin');
    //     $user->syncPermissions($request->permissions);

    //     session()->flash('success', __('site.added_successfully'));
    //     return redirect()->route('admin.users.index');
    // }

    public function store(Request $request)
    {
        $data['customer_name'] = $request->customer_name;
        $data['customer_email'] = $request->customer_email;
        $data['customer_mobile'] = $request->customer_mobile;
        $data['company_name'] = $request->company_name;
        $data['invoice_number'] = $request->invoice_number;
        $data['invoice_date'] = $request->invoice_date;
        $data['sub_total'] = $request->sub_total;
        $data['discount_type'] = $request->discount_type;
        $data['discount_value'] = $request->discount_value;
        $data['vat_value'] = $request->vat_value;
        $data['shipping'] = $request->shipping;
        $data['total_due'] = $request->total_due;

        $invoice = Invoice::create($data);

        $details_list = [];
        for ($i = 0; $i < count($request->product_name); $i++) {
            $details_list[$i]['product_name'] = $request->product_name[$i];
            $details_list[$i]['unit'] = $request->unit[$i];
            $details_list[$i]['quantity'] = $request->quantity[$i];
            $details_list[$i]['unit_price'] = $request->unit_price[$i];
            $details_list[$i]['row_sub_total'] = $request->row_sub_total[$i];
        }

        $details = $invoice->details()->createMany($details_list);

        if ($details) {
            return redirect()->back()->with([
                'message' => __('admin.created_successfully'),
                'alert-type' => 'success'
            ]);
        } else {
            return redirect()->back()->with([
                'message' => __('admin.created_failed'),
                'alert-type' => 'danger'
            ]);
        }
    }

    public function show($id)
    {
        $invoice = Invoice::findOrFail($id);
        return view('admin.invoices.show', compact('invoice'));
    }

    public function edit($id)
    {
        $invoice = Invoice::findOrFail($id);
        return view('admin.invoices.edit', compact('invoice'));
    }

    public function update(Request $request, $id)
    {

        $invoice = Invoice::whereId($id)->first();

        $data['customer_name'] = $request->customer_name;
        $data['customer_email'] = $request->customer_email;
        $data['customer_mobile'] = $request->customer_mobile;
        $data['company_name'] = $request->company_name;
        $data['invoice_number'] = $request->invoice_number;
        $data['invoice_date'] = $request->invoice_date;
        $data['sub_total'] = $request->sub_total;
        $data['discount_type'] = $request->discount_type;
        $data['discount_value'] = $request->discount_value;
        $data['vat_value'] = $request->vat_value;
        $data['shipping'] = $request->shipping;
        $data['total_due'] = $request->total_due;

        $invoice->update($data);

        $invoice->details()->delete();

        $details_list = [];
        for ($i = 0; $i < count($request->product_name); $i++) {
            $details_list[$i]['product_name'] = $request->product_name[$i];
            $details_list[$i]['unit'] = $request->unit[$i];
            $details_list[$i]['quantity'] = $request->quantity[$i];
            $details_list[$i]['unit_price'] = $request->unit_price[$i];
            $details_list[$i]['row_sub_total'] = $request->row_sub_total[$i];
        }

        $details = $invoice->details()->createMany($details_list);

        if ($details) {
            return redirect()->back()->with([
                'message' => __('admin.updated_successfully'),
                'alert-type' => 'success'
            ]);
        } else {
            return redirect()->back()->with([
                'message' => __('admin.updated_failed'),
                'alert-type' => 'danger'
            ]);
        }
    }

    public function destroy($id)
    {
        $invoice = Invoice::findOrFail($id);
        if ($invoice) {
            $invoice->delete();
            return redirect()->route('invoice.index')->with([
                'message' => __('admin.deleted_successfully'),
                'alert-type' => 'success'
            ]);
        } else {
            return redirect()->route('invoice.index')->with([
                'message' => __('admin.deleted_failed'),
                'alert-type' => 'danger'
            ]);
        }
    }

    public function print($id)
    {
        $invoice = Invoice::findOrFail($id);
        return view('admin.invoices.print', compact('invoice'));
    }

    public function pdf($id)
    {
        $invoice = Invoice::whereId($id)->first();

        $data['invoice_id']         = $invoice->id;
        $data['invoice_date']       = $invoice->invoice_date;
        $data['customer']           = [
            __('admin.customer_name')       => $invoice->customer_name,
            __('admin.customer_mobile')     => $invoice->customer_mobile,
            __('admin.customer_email')      => $invoice->customer_email
        ];
        $items = [];
        $invoice_details            =  $invoice->details()->get();
        foreach ($invoice_details as $item) {
            $items[] = [
                'product_name'      => $item->product_name,
                'unit'              => $item->unitText(),
                'quantity'          => $item->quantity,
                'unit_price'        => $item->unit_price,
                'row_sub_total'     => $item->product_subtotal,
            ];
        }
        $data['items'] = $items;

        $data['invoice_number']     = $invoice->invoice_number;
        $data['created_at']         = $invoice->created_at->format('Y-m-d');
        $data['sub_total']          = $invoice->sub_total;
        $data['discount']           = $invoice->discountResult();
        $data['vat_value']          = $invoice->vat_value;
        $data['shipping']           = $invoice->shipping;
        $data['total_due']          = $invoice->total_due;


        $pdf = PDF::loadView('admin.invoices.pdf', $data);

        if (Route::currentRouteName() == 'invoice.pdf') {
            return $pdf->stream($invoice->invoice_number . '.pdf');
        } else {
            $pdf->save(public_path('assets/invoices/') . $invoice->invoice_number . '.pdf');
            return $invoice->invoice_number . '.pdf';
        }
    }

    public function send_to_email($id)
    {

        $invoice = Invoice::whereId($id)->first();
        $this->pdf($id);

        Mail::to($invoice->customer_email)->locale(config('app.locale'))->send(new SendInvoice($invoice));

        return redirect()->route('invoice.index')->with([
            'message' => __('admin.sent_successfully'),
            'alert-type' => 'success'
        ]);
    }
}
