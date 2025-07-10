<x-app-layout>
    <!DOCTYPE html>
<html lang="en">


  <div class="background" style="background-image: url('{{ asset('trackflow/IMG-20250707-WA0254(1).jpg')}}'); background-size:cover; background-position:center; ">
    <h1 class="text-dark mb-5 fw-bold" style="margin-top:-100px;">Welcome to TruckFlow  Movers</h1>

 

    <form action="{{route('track')}}" method="POST" class="tracking-form d-flex justify-content-center">
      @csrf
    <input type="text" name="tracking_number"  class="form-control" placeholder="Tracking ID">
      <button type="submit" class="btn btn-orange">Track</button>
    </form>
  </div>

  <!-- Hero Section -->
  <section class="container my-5">
    <div class="row align-items-center">
      <div class="col-md-6">
        <!-- Replaced src with a placeholder and added img-fluid class -->
        <img src="{{asset('trackflow/IMG-20250707-WA0259.jpg')}}" alt="FedEx Founder" class="img-fluid rounded">
      </div>
      <div class="col-md-6 mt-4 mt-md-0">
        <h4>Honoring the Legacy of Frederick W. Smith</h4>
        <p class="text-muted">Visionary Founder of Truckflow</p>
        <p>An innovative leader whose legacy will be felt for generations to come.</p>
        <a href="#" class="btn btn-outline-primary">Read about Mr. Smith's legacy</a>
      </div>
    </div>
  </section>

  <!-- Why Ship Section -->
  <section class="container my-5">
    <div class="row align-items-center gy-4">
        <!-- Changed to col-12 col-lg-6 to stack on mobile -->
        <div class="col-12 col-lg-6">
           <h1>Why ship with TruckFlow?</h1>
           <div class="row mt-4">
              <!-- Changed to col-12 col-md-6 to stack on smaller screens -->
              <div class="col-12 col-md-6">
                <h6>Innovative solutions for reliability & speed</h6>
                <p>Whether it's across states or worldwide, we prioritize the secure and swift arrival of your shipments.</p>

                <h6 class="mt-4">We ship everywhere*</h6>
                <p>From major cities to remote locations, your goods can reach worldwide.</p>
              </div>
              <div class="col-12 col-md-6">
                <h6>Careful handling you can trust</h6>
                <p>When you need reliable delivery and careful handling, trust TruckFlow to get your items where they need to go on time.</p>
                <h6 class="mt-4">TruckFlow can ship for less than the Post Office</h6>
                <p>Two-day retail shipping, one flat rate. Truckflow One Rate®**</p>
              </div>
           </div>
           <small class="d-block mt-3 text-muted">*Truckfolw doesn't ship anywhere sanctioned by the U.S.<br>**Exclusions apply. Visit the One Rate page to learn more.</small>
        </div>
        <div class="col-12 col-lg-6">
            <!-- Removed fixed width/height, added img-fluid -->
            <img src="{{asset('trackflow/IMG-20250707-WA0261.jpg')}}" alt="TruckFlow Shipping Box" class="img-fluid rounded">
        </div>
    </div>
    <div class="d-flex justify-content-center mt-5">
        <button class="btn btn-lg btn-orange">START SHIPPING NOW</button>
    </div>
  </section>

  <!-- Summer Section -->
  <section class="container my-5">
    <div class="text-center mb-5">
        <h2 class="display-5">Summer is more relaxing with flexible shipping</h2>
    </div>
    <div class="row gy-4">
        <!-- Replaced placeholder content with responsive cards -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100">
                <img src="{{asset('trackflow/IMG-20250710-WA0056.jpg')}}" class="card-img-top" alt="Vacation Hold">
                <div class="card-body">
                    <h5 class="card-title">Make packing shipments a breeze</h5>
                    <p class="card-text mb-5">Going on vacation? Redirect your packages to a secure TruckFlow location or a participating retailer and pick them up when you're back.</p>
                    <a href="#" class="fw-bold">PACK WITH CONFIDENT</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100">
                <img src="{{asset('trackflow/IMG-20250707-WA0254(1).jpg')}}" class="card-img-top" alt="Delivery Manager">
                <div class="card-body">
                    <h5 class="card-title">Keep packages secure from afar</h5>
                    <p class="card-text">Take a trip without worrying about boxes piling up at home. Use TruckFlow Delivery Manager® to redirect packages for pickup. Or place a free vacation hold.</p>
                    <a href="#" class="fw-bold">MANAGE YOUR DELIVERIES</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100">
                <img src="{{asset('trackflow/IMG-20250707-WA0262.jpg')}}" class="card-img-top" alt="TruckFlow Mobile App">
                <div class="card-body">
                    <h5 class="card-title">Ship and track with a few taps</h5>
                    <p class="card-text">Get delivery updates on your phone by enabling push notifications in the TruckFlow® Mobile app. Track packages and manage deliveries from one convenient place.</p>
                    <a href="#" class="fw-bold">DOWMLOAD THE APP</a>
                </div>
            </div>
        </div>
    </div>
 </section>

  <!-- Proactive Business Section -->
  <section class="container my-5">
    <div class="row align-items-center gy-4">
        <div class="col-lg-6">
           <p class="fs-4">Ship globally with the right guidance</p>
           <p>It’s a big world, and international shipping can be complex. But it’s easier with support from experts, timesaving tools, and flexible shipping and logistics services.</p>
           <button class="btn btn-lg btn-outline-primary mt-3">EXPLORE GLOBAL SHIPPING</button>
        </div>
        <div class="col-lg-6">
             <!-- Removed fixed width/height, added img-fluid -->
             <img src="{{asset('trackflow/IMG-20250707-WA0256(1).jpg')}}" alt="Global Shipping" class="img-fluid rounded">
        </div>
    </div>

     <p class="display-5 text-center mt-5 pt-4">Be proactive to help your business shine</p>

     <!-- Adjusted grid and alignment for responsiveness -->
     <div class="row mt-4 align-items-center gy-3">
        <div class="col-md-3 text-center">
          <!-- Removed fixed width, added img-fluid -->
          <img src="{{asset('trackflow/IMG-20250707-WA0253(1).jpg')}}" alt="Customs" class="img-fluid rounded">
        </div>
        <div class="col-md-9 text-center text-md-start">
            <p class="fs-5 mb-1">Clear customs. And a path forward.</p>
            <p>The latest U.S. tariffs and international shipping requirements are new. But changes in global trade aren't. TruckFlow has been helping customers navigate global regulations for 50+ years.</p>
            <a href="#" class="fw-bold">UNDERSTAND TARIFFS</a>
        </div>
     </div>

      <div class="row mt-5 align-items-center gy-3">
        <div class="col-md-3 text-center">
          <img src="{{asset('trackflow/IMG-20250627-WA0011.jpg')}}" alt="Rewards" class="img-fluid rounded">
        </div>
        <div class="col-md-9 text-center text-md-start">
            <p class="fs-5 mb-1">Watch your shipments turn into rewards.</p>
            <p>With TruckFlow Rewards, you earn gift cards from name-brand retailers when you ship. And you get a $10 gift card just for completing your first eligible shipment. It's free to sign up.*</p>
            <a href="#" class="fw-bold">JOIN TRUCKFLOW REWARDS</a>
        </div>
     </div>

      <div class="row mt-5 align-items-center gy-3">
        <div class="col-md-3 text-center">
          <img src="{{asset('trackflow/IMG-20250710-WA0061.jpg')}}" alt="Perishables" class="img-fluid rounded">
        </div>
        <div class="col-md-9 text-center text-md-start">
            <p class="fs-5 mb-1">Shipping perishables? Outsmart hot days.</p>
            <p>Learn how to pack items that need to stay cool, cold, or frozen. And let experts at the Truckflow Packaging Lab test your packaging before you ship. It may help reduce claims.</p>
            <a href="#" class="fw-bold">PROTECT YOUR PERISHABLES</a>
        </div>
     </div>

     <div class="mt-5 pt-4 border-top">
         <h6>TruckFlow rate and surcharge changes</h6>
         <small class="text-muted"> Learn more about rate and surcharge changes--last updated 6/23/2025.</small>

          <h6 class="mt-4">Truckflow money-back guarantee</h6>
         <small class="text-muted">We offer a money-back guarantee for select services. This guarantee may be suspended, modified, or revoked. Please check money-back guarantee for the latest status of our money-back guarantee.</small>

         <small class="d-block mt-4 text-muted">*For details, please see Truckflow Rewards Terms and Conditions.</small>
     </div>
 </section>

<section class="container my-5">
    <div class="text-center mb-5">
         <p class="display-6 text-center mt-5 pt-4">OUR PET MOVING SERVICES</p>
    </div>
    <div class="row gy-4">
        <!-- Replaced placeholder content with responsive cards -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100">
                <img src="{{asset('trackflow/IMG-20250710-WA0063.jpg')}}" class="card-img-top" alt="Vacation Hold">
                <div class="card-body">
                    <h5 class="card-title">DOMESTIC PET RELOCATION</h5>
                    <p class="card-text mb-5">Your pet can confortably travel anywhere in the 48 contiguous United State with us, where you choose to do soin the air or on the ground.</p>
                    <a href="#" class="fw-bold">DOMESTIC RELOCATION</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100">
                <img src="{{asset('trackflow/IMG-20250710-WA0055.jpg')}}" class="card-img-top" alt="Delivery Manager">
                <div class="card-body">
                    <h5 class="card-title">INTERNATIONAL PET RELOCATION</h5>
                    <p class="card-text">Relocating your pet to another country requires lots of leg work.We handle as much of the process as you want, from doors to doors or airport.</p>
                    <a href="#" class="fw-bold">INTERNATIONAL PET RELOCATION</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100">
                <img src="{{asset('trackflow/IMG-20250707-WA0262.jpg')}}" class="card-img-top" alt="TruckFlow Mobile App">
                <div class="card-body">
                    <h5 class="card-title">Ship and track with a few taps</h5>
                    <p class="card-text">Get delivery updates on your phone by enabling push notifications in the TruckFlow® Mobile app. Track packages and manage deliveries from one convenient place.</p>
                    <a href="#" class="fw-bold">DOWMLOAD THE APP</a>
                </div>
            </div>
        </div>
    </div>
 </section>

 <h3 class="text-center">OUR IMPACT</h3>
 <h1 class="text-danger text-center">34</h1>
<h3 class="text-center text-danger">YEARS MOVING PETS</h3>
<p class="text-center">IPATA Member since 1990</p>
<hr class="text-danger">
<h1 class="text-center text-danger">12,500</h1>
<h3 class="text-center text-danger">PETS MOVED</h3>
<p class="text-center">Across 155+ destinations</p>
<hr class="text-danger">
<h1 class="text-center text-danger">281</h1>
<h3 class="text-center text-danger">GOOGLE REVIEWS</h3>
<p class="text-center">Average google rating is 4.8</p>
<hr class="text-danger">

 
</x-app-layout>