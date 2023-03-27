<x-mail::message>
  
  
Hello {{$user->name}},
  
  
  
  @php
 
  	$order = DB::table('orders')
  	->where('user_id', $user->id)
  	->orderby('id','DESC')
  	->first();
  
  
  
  $message_settings = DB::table('message_settings')
  	->first();
  
  
  @endphp
  
  <div>
  	Thank you for your order from Gapaautomobile, if you have question about your order, you can email us at https://gapaautoparts.com. 
<br/>
Your shipping information is bellow, confirming the goods in person when receiving, non-quality issues will not be retured after unpackin. Thank you again for your patience.



<br/>Sincerely

<br/>Gapaautoparts

<br/>CUSTOMER SERVICE : 08181353103

<br/>Whatsapp: +234 09 1627 9193, +234 70 1761 8320


  </div>

<div>
   <p style="text-align:center; ">Order ID</p>
   <div>
    <h1 style="text-align:center; font-size: 50px;">{{$order->id}}</h1>
   </div>
    </div>
   
  
<br/>Billing Info<br/>
  <br/>Name: {{$user->name}}
  <br/>Address: {{$user->address}}
  <br/>Phone Number: {{$user->phone}}
  
 
      
     
Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
