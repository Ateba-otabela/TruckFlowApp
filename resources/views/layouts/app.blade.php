<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>TruckFlow</title>
  <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/a2e0e6f91c.js" crossorigin="anonymous"></script>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
    }
    .fedex-purple {
      background-color: #4d148c;
      color: white;
    }
   
    .quick-action i {
      font-size: 1.5rem;
      color: #4d148c;
    }
    .footer-links a {
      text-decoration: none;
      color: #4d148c;
      padding-bottom: 0.5rem;
    }
    .footer-links a:hover {
        text-decoration: underline;
    }
    .footer-icons i {
      font-size: 1.2rem;
      color: #4d148c;
      margin: 0 8px;
    }
    .btn-orange {
      background-color: #ff6600;
      color: white;
      border: none;
    }
    .btn-orange:hover {
      background-color: #e65c00;
      color: white;
    }
    .btn-outline-primary {
        border-color: #4d148c;
        color: #4d148c;
    }
    .btn-outline-primary:hover {
        background-color: #4d148c;
        color: white;
    }
    .card {
        border: 1px solid #ddd;
        transition: box-shadow 0.3s ease-in-out;
    }
    .card:hover {
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }
    /* Ensure images in cards don't get distorted */
    .card-img-top {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }
      body, html {
      height: 100%;
      margin: 0;
      padding: 0;
    }
    .background {
      background-image: url('{{asset('testing/images/images.jpeg')}}');
      background-size: cover;
      background-position: center;
      height: 50vh;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      text-align: center;
    }
    .button-box {
      display: flex;
      gap: 20px;
      margin-bottom: 20px;
      flex-wrap: wrap;
      justify-content: center;
    }
    .btn-lg-square {
      width: 150px;
      height: 100px;
      font-size: 1.2rem;
      font-weight: bold;
      border: none;
      color: white;
    }
    .btn-transit { background-color: #dc3545; } /* red */
    .btn-track { background-color: #198754; }   /* green */
    .btn-ship { background-color: #0d6efd; }    /* blue */
    .tracking-form input {
      max-width: 300px;
      padding: 10px;
      margin-right: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }
  </style>
</head>
<body>

  <!-- Top Navbar -->
  <nav class="navbar navbar-expand-lg fedex-purple fixed-top">
    <div class="container-fluid px-4">
      <img src="{{asset('trackflow/IMG-20250707-WA0262.jpg')}}" alt="" heigth="60px" width="60px" style="border-radius:50px"
    >
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu" aria-controls="navMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon" style="background-image: url('data:image/svg+xml;charset=utf8,%3Csvg viewBox=\'0 0 30 30\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath stroke=\'rgba(255, 255, 255, 1)\' stroke-width=\'2\' stroke-linecap=\'round\' stroke-miterlimit=\'10\' d=\'M4 7h22M4 15h22M4 23h22\'/%3E%3C/svg%3E');"></span>
      </button>
      <div class="collapse navbar-collapse" id="navMenu">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shipping</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Create Shipment</a></li>
              <li><a class="dropdown-item" href="#">Rates</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Tracking</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Track a Package</a></li>
              <li><a class="dropdown-item" href="#">Advanced Tracking</a></li>
            </ul>
          </li>
         @auth
         <li class="nav-item">
            <a class="nav-link text-white" href="/admin">Admin Dashboard</a>
          </li>
         @endauth
          <li class="nav-item">
            <a class="nav-link text-white" href="/">Track</a>
          </li>
        
            <div class="d-flex ms-5 justify-items-between">
      @guest
              <li class="nav-item" >
            <a class="nav-link text-white" href="{{route('register')}}">Sign Up</a>
          </li>
           <li class="nav-item">
            <a class="nav-link text-white" href="login">Log In</a>
          </li>
      @endguest
    <form action="{{route('logout')}}" method="POST">
        @csrf
            
          @auth
                <button type="submit" class="nav-link text-white" >Logout</button>
          @endauth
       
    </form>
         </div>
      
        </ul>
   
      </div>
    </div>
  </nav>
<body class="" style="margin-top:80px;">
    {{ $slot }}
</body>
 <!-- Footer -->
  <footer class="bg-light pt-5 pb-3 mt-5 border-top">
    <div class="container">
      <!-- Changed to col-6, col-lg-3 for better layout on small and medium screens -->
      <div class="row mb-4 gy-4">
        <div class="col-md-3 col-6">
          <h6 class="fw-bold">OUR COMPANY</h6>
          <div class="footer-links d-flex flex-column">
            <a href="#">About TruckFlow</a>
            <a href="#">Our Portfolio</a>
            <a href="#">Investor Relations</a>
            <a href="#">Careers</a>
          </div>
        </div>
        <div class="col-md-3 col-6">
          <h6 class="fw-bold">MORE FROM TRUCKFLOW</h6>
          <div class="footer-links d-flex flex-column">
            <a href="#">Truckflow Developer Portal</a>
            <a href="#">Truckflow Compatible</a>
            <a href="#">ShopRunner</a>

          </div>
        </div>
        <div class="col-md-3 col-6">
          <h6 class="fw-bold">LANGUAGE</h6>
          <select class="form-select" aria-label="Language select">
            <option selected>English</option>
            <option>Français</option>
            <option>Español</option>
          </select>
        </div>
        <div class="col-md-3 col-6">
          <h6 class="fw-bold">FOLLOW TRUCKFLOW</h6>
          <div class="footer-icons mt-2">
            <a href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
            <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
            <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
          </div>
        </div>
      </div>
      <div class="text-center small text-muted border-top pt-3">
        &copy; Truckflow 1995–2025 | <a href="#">Terms of Use</a> | <a href="#">Privacy & Security</a><br>
        <a href=""><small> &copy;ateba otabela jean patrice</small></a>
      </div>
    </div>
  </footer>

  <!-- Consolidated and cleaned up script section -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    // Example of how you could trigger the SweetAlert popup.
    // This is just for demonstration as the original PHP logic was removed.
    document.addEventListener('DOMContentLoaded', function() {
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.has('tracking_error')) {
            Swal.fire({
                icon: 'error',
                title: 'Invalid tracking number!',
                text: 'Go back to your orders and verify your tracking number and try again',
                confirmButtonText: 'Okay'
            });
        }
    });

   
    // Use SweetAlert2 for popup confirmation
    @if(session('tracking'))
        Swal.fire({
            icon: 'error',
            title: 'Invalid tracking number!',
            text: 'Go back to your orders and verify your tracking number and try again',
            confirmButtonText: 'Okay'
        });
    @endif


  </script>
</body>

</html>
