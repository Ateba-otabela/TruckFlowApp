<?php

namespace App\Http\Controllers;

use App\Models\Shipp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function adminDashboard(){
        $shippments = Shipp::all();

        return view('admin.index', compact('shippments'));
    }

    public function shippment(){
        return view('admin.shippment');
    }

    public function shipping(Request $request){
        
     
    Shipp::create([
      
           //shipper informations
      'Tracking_number' => request('trackingNumber'),
      'senders_name' => request('senders_name'),
      'company_location' => request('company_location'), 
      'code' => request('code'),
      'company_email' => request('company_email'),
          //Receiver informations
       'receivers_name' => request('receivers_name'),
       'receiver_location' => request('receiver_location'),
       'zip_code' => request('zip_code'),
       'receiver_email' => request('receiver_email'),
         //shippment informations
        'package' => request('package'),
        'status' => 'In Transit',
        'destination' => request('destination'),
        'carier' => 'Prime_Logistic',
        'type_of_shippment' => request('type_of_shippment'),
        'weight' => request('weight'),
        'shipment_mode' => request('shipment_mode'),
        'carrier_No' => '7207987331',
        'product' => 'product',//product name and quantity
        'qty' => '4',//quantity
        'payment mode' => 'PEYPAL',
        'comment' => 'SHIPPMENT HAVE BEEN REGISTERED',
        'delivery_date' => '06/06/2025',
        'delivery_time' => '08:40',
        'pick_up_date' => request('pick_up_date'),
        'pick_up_time' => '4:00',
          //shipment history
        'date' => request('date'),
        'time' => request('time'),
        'location' => request('location'),
        'remark' => 'SHIPPMENT IS PENDING DUE TO INSURANCE FEES',
        'updated_by' => 'Admin',
    

    ]);
    dd($request->all());
     return redirect()->back()->with('shipping', 'Your shippment have been place successfully!');
    }

     // randles the logic behind the order tracking
public function track(Request $request){
     

// Get the validated tracking number
$tracking_number = $request->tracking_number;


// Check if the tracking number exists in the database
$shipment = Shipp::where('Tracking_number', $tracking_number)->first();



if ($shipment) {
    // Redirect to the desired route if tracking exists
    return redirect()->route('show_tracking', ['tracking_number' => $tracking_number]);

} else {
    // Redirect back with an error if tracking does not exist
    return redirect()->back()->with(['tracking' => 'Tracking number not found.']);
}
    }

    public function showtracking($id){
        $shipment = Shipp::findOrFail($id);

    
        return view('admin.updateTracking', compact('shipment'));
    }

    public function updatetracking(Request $request, $id){
    
    $shipment = Shipp::findOrFail($id);

    $shipment->update($request->all());

    return redirect()->route('updatetracking', $id)->with('success', 'Shipment updated successfully!');
}

     public function show_tracking($tracking_number){
        $shipment = Shipp::where('tracking_number', $tracking_number)->firstOrFail();
        return view('admin.showTracking',compact('shipment'));
   }
}
