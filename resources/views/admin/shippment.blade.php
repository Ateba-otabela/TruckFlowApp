<x-app-layout>
 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Shipment Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light py-4 container">

<div class="container">
  <h2 class="mb-4 mt-4 text-center">Shipment Details Form</h2>
  <div class="alert alert-warning d-flex align-items-center" role="alert">
  <i class="bi bi-exclamation-triangle-fill me-2"></i>
  <div>
    <strong>Note:</strong> Please fill out all the shipment information carefully. Accurate details ensure smooth and timely delivery.
  </div>
</div>

</div>

  <form method="post" action="{{ route('shipp') }}" class="container">
    @csrf
    <div class="row g-3">
      <!-- Receiver Info -->
      <div class="col-md-6">
        <label for="receivers_name" class="form-label">Receiver's Name</label>
        <input type="text" class="form-control" id="receivers_name" name="receivers_name" required >
      </div>
      <div class="col-md-6">
        <label for="receiver_location" class="form-label">Receiver Location</label>
        <input type="text" class="form-control" id="receiver_location" name="receiver_location" required>
      </div>
      <div class="col-md-4">
        <label for="zip_code" class="form-label">ZIP Code</label>
        <input type="text" class="form-control" id="zip_code" name="zip_code" required>
      </div>
      <div class="col-md-8">
        <label for="receiver_email" class="form-label">Receiver Email</label>
        <input type="email" class="form-control" id="receiver_email" name="receiver_email" required>
      </div>

      <!-- Shipment Info -->
      <div class="col-md-6">
        <label for="package" class="form-label">Package</label>
        <input type="text" class="form-control" id="package" name="package" required>
      </div>
      <div class="col-md-6">
        <label for="destination" class="form-label">Destination</label>
        <input type="text" class="form-control" id="destination" name="destination" required>
      </div>
      <div class="col-md-6">
        <label for="type_of_shippment" class="form-label">Type of Shipment</label>
        <input type="text" class="form-control" id="type_of_shippment" name="type_of_shippment" required>
      </div>
      <div class="col-md-6">
        <label for="shipment_mode" class="form-label">Shipment Mode</label>
        <input type="text" class="form-control" id="shipment_mode" name="shipment_mode" required>
      </div>

      <!-- Date & Location Info -->
      <div class="col-md-4">
        <label for="pick_up_date" class="form-label">Pick Up Date</label>
        <input type="date" class="form-control" id="pick_up_date" name="pick_up_date" required>
      </div>
      <div class="col-md-4">
        <label for="date" class="form-label">Date</label>
        <input type="date" class="form-control" id="date" name="date" required>
      </div>
      <div class="col-md-4">
        <label for="time" class="form-label">Time</label>
        <input type="time" class="form-control" id="time" name="time" required>
      </div>
      <div class="col-md-12 d-flex gap-3 justify-content-between">
        <label for="location" class="form-label">Current Location</label>
        <input type="text" class="form-control" id="location" name="location" required>
        <label for="tracking_number">Tracking number</label>
        <input type="text" class="form-control" require name="trackingNumber">
      </div>
    </div>

    <button type="submit" class="btn btn-dark mt-4 mb-4">Submit</button>
  </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<script>
    // Use SweetAlert2 for popup confirmation
    @if(session('shipping'))
        Swal.fire({
            icon: 'success',
            title: 'Shippment placed successfully!',
            text: 'You will be delivered on the due date, use our tracking number to track your product and if any issued occure, contact our company at atebapatrice@gmail.com',
            confirmButtonText: 'Okay'
        });
    @endif

</script>



</x-app-layout>