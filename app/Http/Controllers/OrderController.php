<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\product;
use App\Models\Dealer;
use App\Models\Corporate;
use DB;


class OrderController extends Controller
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
        //
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
        //


        $data = new Order();
        $data->user_id = $request->user_id;
        $data->product_id = $request->product_id;
        $data->product_price = $request->product_price;
        $data->save();
        return redirect()->back()->with('success', 'Item added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $t = 0;
        $dealer = Dealer::findOrFail($id);
        $data = DB::table('dealers')
            ->join('dealer_orders', 'dealers.id', 'dealer_orders.user_id')
            ->join('parts', 'dealer_orders.product_id', 'parts.id')
            ->select('dealers.*', 'parts.name', 'parts.*')->where('dealers.id', $id)
            ->get();

        $sumTotal = DB::table('dealer_orders')->where('user_id', $id)->sum('product_price');

        return view('dist.apps.invoices.view.invoice', compact('data', 'dealer', 'sumTotal'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(order $order)
    {
        //
    }
}
