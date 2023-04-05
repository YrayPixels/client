<?php

namespace App\Http\Controllers;

use App\Mail\approve_dealer;
use App\Mail\register_dealer;
use App\Mail\suspend_dealer;
use Illuminate\Http\Request;
use App\Models\Dealer;
use App\Models\Corporate;
use DB;
use Illuminate\Support\Facades\Mail;

class DealerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function sales()
    {
        $active = 1;
        $dealers = DB::table('clients')->select('*')->latest()->simplePaginate(10);
        // $dealers = DB::table('dealers', 'corporates')->select('*', 'corporates.*')->where('active', $active)->latest()->simplePaginate(10);
        return view('dist.apps.customers.sales', compact('dealers'));
    }


    public function index()
    {
        $active = 3;
        $dealers = DB::table('clients')->select('*')->latest()->simplePaginate(10);
        return view('dist.apps.customers.customerlist', compact('dealers'));
    }

    public function create()
    {
        return view('dealers.create');
    }

    // public function store(Request $request)
    // {
    //     Dealer::create($request->all());
    //     return redirect()->route('dealers.index')->with('success', 'Dealer created successfully.');
    // }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_type' => 'required',
            'user_code' => 'required',
            'first_name' => 'required | string',
            'last_name' => 'required',
            'state' => 'required',
            'local_government' => 'required',
            'landmark' => 'required',
            'address' => 'required',
            'phone_number' => 'required',
            'email' => 'required|email',
            'profile_image' => 'image|max:2048',
            'store_name' => 'required',
            'store_address' => 'required',
            'idcard' => 'mimes:pdf,xlxs,xlx,docx,csv,txt,png,gif,jpg,jpeg|max:2048',
            'bank_number' => 'required',
            'bank_name' => 'required',
            'bank' => 'required',
        ]);

        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('images');
            $image->move($path, $imageName);
            $validatedData['profile_image'] = $imageName;
        }

        if ($request->hasFile('idcard')) {
            $image = $request->file('idcard');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('edocm');
            $image->move($path, $imageName);
            $validatedData['idcard'] = $imageName;
        }


        $dealer = Dealer::create($validatedData);
        // dd($dealer);
        if ($dealer) {
            Mail::to($dealer->email)->send(new register_dealer($dealer));
            return redirect()->back()->with('success', 'Dealer created successfully, awaiting admin approval.');
        } else {
            // return redirect()->back()->with('error', 'An Error occured, awaiting admin approval.');
            echo 'e no work o';
        }
    }

    public function show($user_code)
    {
        // return $id;
        $data = Dealer::findOrFail($user_code);

        return view('dist.account.dview', compact('data'));
    }

    public function approve($user_code)
    {
        // return $id;
        $dealer = Dealer::findOrFail($user_code);
        $dealer->status = 2;

        $dealer->save();
        Mail::to($dealer->email)->send(new approve_dealer($dealer));
        return redirect()->back()->with('success', 'Dealer approved.');
    }
    public function suspend($user_code)
    {
        $dealer = Dealer::findOrFail($user_code);
        $dealer->status = 3;

        $dealer->save();
        Mail::to($dealer->email)->send(new suspend_dealer($dealer));
        return redirect()->back()->with('success', 'Dealer suspended.');
    }
    public function de_activate($user_code)
    {
        $data = Dealer::findOrFail($user_code);
        $data->status = 0;

        $data->save();

        return redirect()->back()->with('success', 'Dealer Deactivated');
    }

    public function edit(Dealer $dealer)
    {
        return view('dealers.edit', compact('dealer'));
    }

    public function update(Request $request, Dealer $dealer)
    {
        $dealer->update($request->all());
        return redirect()->route('dealers.index')->with('success', 'Dealer updated successfully.');
    }

    public function destroy(Request $request)
    {
        //
    }
}
