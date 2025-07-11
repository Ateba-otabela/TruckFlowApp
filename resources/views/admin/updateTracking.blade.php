<x-app-layout>
 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container">
  
  <h2 class="mb-4 mt-4 text-center">Shipment Details Form</h2>
  <div class="alert alert-warning d-flex align-items-center" role="alert">
  <i class="bi bi-exclamation-triangle-fill me-2"></i>
  <div>
    <strong>Note:</strong> Please fill out all the shipment information carefully. Accurate details ensure smooth and timely delivery.
  </div>
</div>
<form action="{{ route('updatetracking', $shipment->id) }}" method="POST" class="container mt-4">
 @csrf
  <h2 class="mb-3">Sender Information</h2>
  <div class="row mb-3" >
    <div class="col-md-6">
      <label class="form-label">Sender's Name</label>
      <input type="text" class="form-control" name="senders_name" required value="{{ old('senders_name', $shipment->senders_name) }}">
    </div>
    <div class="col-md-6">
      <label class="form-label">Company Location</label>
      <input type="text" class="form-control" name="company_location" value="{{ old('senders_name', $shipment->company_location) }}">
    </div>
    <div class="col-md-6">
      <label class="form-label">Code</label>
      <input type="text" class="form-control" name="code" value="{{ old('senders_name', $shipment->code) }}">
    </div>
    <div class="col-md-6">
      <label class="form-label">Company Email</label>
      <input type="email" class="form-control" name="company_email" value="{{ old('senders_name', $shipment->company_email) }}">
    </div>
  </div>

  <h2 class="mb-3">Receiver Information</h2>
  <div class="row mb-3">
    <div class="col-md-6">
      <label class="form-label">Receiver's Name</label>
      <input type="text" class="form-control" name="receivers_name" required value="{{ old('senders_name', $shipment->receivers_name) }}">
    </div>
    <div class="col-md-6">
      <label class="form-label">Receiver Location</label>
      <input type="text" class="form-control" name="receiver_location" value="{{ old('senders_name', $shipment->receiver_location) }}">
    </div>
    <div class="col-md-6">
      <label class="form-label">ZIP Code</label>
      <input type="text" class="form-control" name="zip_code" value="{{ old('senders_name', $shipment->zip_code) }}">
    </div>
    <div class="col-md-6">
      <label class="form-label">Receiver Email</label>
      <input type="email" class="form-control" name="receiver_email" value="{{ old('senders_name', $shipment->receiver_email) }}">
    </div>
  </div>

  <h2 class="mb-3">Package Details</h2>
  <div class="row mb-3">
    <div class="col-md-4">
      <label class="form-label">Package</label>
      <input type="text" class="form-control" name="package" value="{{ old('senders_name', $shipment->package) }}">
    </div>
    <div class="col-md-4">
      <label class="form-label">Destination</label>
      <input type="text" class="form-control" name="destination" value="{{ old('senders_name', $shipment->destination) }}">
    </div>
    <div class="col-md-4">
      <label class="form-label">Carrier</label>
      <input type="text" class="form-control" name="carier" value="{{ old('senders_name', $shipment->carier) }}">
    </div>
    <div class="col-md-6">
      <label class="form-label">Carrier No</label>
      <input type="text" class="form-control" name="carrier_No" value="{{ old('senders_name', $shipment->carrier_No) }}">
    </div>
    <div class="col-md-6">
      <label class="form-label">Type of Shipment</label>
      <input type="text" class="form-control" name="type_of_shippment" value="{{ old('senders_name', $shipment->type_of_shippment) }}">
    </div>
    <div class="col-md-6">
      <label class="form-label">Weight</label>
      <input type="text" class="form-control" name="weight" value="{{ old('senders_name', $shipment->weight) }}">
    </div>
    <div class="col-md-6">
      <label class="form-label">Shipment Mode</label>
      <input type="text" class="form-control" name="shipment_mode" value="{{ old('senders_name', $shipment->shipment_mode) }}">
    </div>
    <div class="col-md-6">
      <label class="form-label">Product</label>
      <input type="text" class="form-control" name="product" value="{{ old('senders_name', $shipment->product) }}">
    </div>
    <div class="col-md-6">
      <label class="form-label">Quantity</label>
      <input type="number" class="form-control" name="qty" value="{{ old('senders_name', $shipment->qty) }}">
    </div>
  </div>

  <h2 class="mb-3">Delivery Details</h2>
  <div class="row mb-3">
    <div class="col-md-6">
      <label class="form-label">Payment Mode</label>
      <input type="text" class="form-control" name="payment_mode" value="{{ old('senders_name', $shipment->payment_mode) }}">
    </div>
    <div class="col-md-6">
      <label class="form-label">Comment</label>
      <textarea class="form-control" name="comment" value="{{ old('senders_name', $shipment->comment) }}"></textarea>
    </div>
    <div class="col-md-6">
      <label class="form-label">Delivery Date</label>
      <input type="date" class="form-control" name="delivery_date" value="{{ old('senders_name', $shipment->delivery_date) }}">
    </div>
    <div class="col-md-6">
      <label class="form-label">Delivery Time</label>
      <input type="time" class="form-control" name="delivery_time" value="{{ old('senders_name', $shipment->pick_up_date) }}">
    </div>
    <div class="col-md-6">
      <label class="form-label">Pick-Up Date</label>
      <input type="date" class="form-control" name="pick_up_date">
    </div>
    <div class="col-md-6">
      <label class="form-label">Pick-Up Time</label>
      <input type="time" class="form-control" name="pick_up_time" value="{{ old('senders_name', $shipment->pick_up_time) }}">
    </div>
    <div class="col-md-6">
      <label class="form-label">Date</label>
      <input type="date" class="form-control" name="date" value="{{ old('senders_name', $shipment->date) }}">
    </div>
    <div class="col-md-6">
      <label class="form-label">Time</label>
      <input type="time" class="form-control" name="time" value="{{ old('senders_name', $shipment->time) }}">
    </div>
    <div class="col-md-6">
      <label class="form-label">Location</label>
      <input type="text" class="form-control" name="location" value="{{ old('senders_name', $shipment->location) }}">
    </div>
    <div class="col-md-6">
      <label class="form-label">Status</label>
      <input type="text" class="form-control" name="status" value="{{ old('senders_name', $shipment->status) }}">
    </div>
    <div class="col-md-6">
      <label class="form-label">Remark</label>
      <textarea class="form-control" name="remark" value="{{ old('senders_name', $shipment->remark) }}"></textarea>
    </div>
    <div class="col-md-6">
      <label class="form-label">Updated By</label>
      <input type="text" class="form-control" name="updated_by" value="{{ old('senders_name', $shipment->updated_by) }}">
    </div>
  </div>
  <button type="submit" class="btn btn-dark my-4">Submit</button>

</form>

</x-app-layout>
