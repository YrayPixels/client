<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;
use App\Models\order;
use Illuminate\Support\Str;
use App\Models\product;
use App\Models\Dealer;
use App\Models\Corporate;
use Illuminate\Support\Facades\DB;

class InvoiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $da = strtotime('+1 week');
        $date = date("d M Y", $da);
        $t = 1;
        $id = 2;

        $data = Invoice::select('*')->where('id', $id);
        $data->active = 0;
        // $data->save();
        // return$article = Invoice::where('id',$t);
        // $article->update($request->all());
        // return $m=DB::table('invoices')->where('active',2);
        // DB::table('invoices')->update(['active'],0)->where('due_date',$date);
        // return $up= DB::table('invoices')->select('*')->where('due_date','$date');
        $active = 3;
        $dealers = DB::table('invoices')->select('*')->latest()->simplePaginate(10);
        return view('dist.apps.customers.invoicelist', compact('dealers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Invoice;
        $data->invoice = $request->invoice;
        $data->buyer_name = $request->buyer_name;
        $data->user_id = $request->user_id;
        $data->user_code = $request->user_code;
        $data->total_price = $request->total_price;
        $data->added_price = $request->added_price;
        $data->issue_date = $request->issue_date;
        $data->due_date = $request->due_date;
        $data->save();
        if ($data == True) {
            return redirect()->back();
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dealer = Dealer::findOrFail($id);
        $data = DB::table('dealers')
            ->join('dealer_orders', 'dealers.id', 'dealer_orders.user_id')
            ->join('parts', 'dealer_orders.product_id', 'parts.id')
            ->select('dealers.*', 'parts.name', 'parts.*')->where('dealers.id', $id)
            ->get();
        $sumTotal = DB::table('dealer_orders')->where('user_id', $id)->sum('product_price');
        $suminvoice = Invoice::findOrFail($id);
        // $suminvoice=DB::table('invoices')->select('*')->where('user_id',$id);
        return view('dist.apps.invoices.view.invoice-2', compact('data', 'dealer', 'sumTotal', 'suminvoice'));
    }
    public function approve($user_code)
    {
        // return $id;
        $data = Invoice::findOrFail($user_code);
        $data->active = 1;
        $data->save();
        return redirect()->back()->with('success', 'Invoice approved.');
    }

    public function de_activate($user_code)
    {
        $data = Invoice::findOrFail($user_code);
        $data->active = 0;
        $data->save();
        return redirect()->back()->with('success', 'Invoice Deactivated');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function edit(Invoice $invoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Invoice $invoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invoice $invoice)
    {
        //
    }
}
