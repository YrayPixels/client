<?php

namespace App\Http\Controllers;

use App\Models\Corporate;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Mail;
use App\Notifications\WelcomeNotification;
use DB;
use App\Models\Dealer;


class CorporateController extends Controller
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
         $active=3;
        $corporates = DB::table('corporates')->select('*')->latest()->simplePaginate(10);
        // return view('corporates.index', compact(''));
        return view('dist.apps.customers.listc', compact('corporates'));
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
        $validatedData = $request->validate([
        'user_code' => 'required',
        'user_type' => 'required',
        'first_name' => 'required | string',
        'last_name' => 'required',
        'state' => 'required',
        'local_government' => 'required',
        'landmark' => 'required',
        'address' => 'required',
        'phone_number' => 'required', 
        'email' => 'required|email',
        'profile_image' => 'image|max:2048',
        'caddress'=> 'required',
        'tin'=> 'required',
        'cac'=> 'mimes:pdf,xlxs,xlx,docx,csv,txt,png,gif,jpg,jpeg|max:2048',
        'idcard'=>'mimes:pdf,xlxs,xlx,docx,csv,txt,png,gif,jpg,jpeg|max:2048',
        'bank_number'=> 'required',
        'bank_name'=> 'required',
        'bank'=> 'required',
    ]);

    if($request->hasFile('profile_image')) {
        $image = $request->file('profile_image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $path=public_path('images');
        $image->move($path, $imageName);
        $validatedData['profile_image'] = $imageName;
    }

     if($request->hasFile('cac')) {
        $image = $request->file('cac');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $path=public_path('docm');
        $image->move($path, $imageName);
        $validatedData['cac'] = $imageName;
    }
     if($request->hasFile('idcard')) {
        $image = $request->file('idcard');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $path=public_path('edocm');
        $image->move($path, $imageName);
        $validatedData['idcard'] = $imageName;
    }

    $corporate = Dealer::create($validatedData);

     // $corporate->notify(new WelcomeNotification());
       

    // send email to corporate
    // \Mail::send('emails.corporate',$corporate->toArray(),function($message){
    //     $message->to($request->email,'meyor')->subject('Welcome');
    // });

    // \Mail::to($corporate->email)->send(new corporateRegistered($corporate));

    return redirect()->back()->with('success', 'corporate created successfully, awaiting admin approval.');
    // return response()->json(['message','successfully created new user']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Corporate  $corporate
     * @return \Illuminate\Http\Response
     */
    public function show(Corporate $corporate)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Corporate  $corporate
     * @return \Illuminate\Http\Response
     */
    public function edit(Corporate $corporate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Corporate  $corporate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Corporate $corporate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Corporate  $corporate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Corporate $corporate)
    {
        //
    }
}
