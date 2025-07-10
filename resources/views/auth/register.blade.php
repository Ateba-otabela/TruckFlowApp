<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register | E-Commerce</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Animate.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

  <style>
    body {
      background: linear-gradient(135deg, #f8f9fa, #e9ecef);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .register-card {
      background: #fff;
      padding: 2rem;
      border-radius: 1rem;
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 460px;
    }

    .social-btn {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 0.5rem;
      width: 100%;
      padding: 0.6rem;
      border: none;
      border-radius: 0.4rem;
      font-weight: 500;
      transition: background 0.3s ease;
    }

    .social-btn svg {
      width: 20px;
      height: 20px;
    }

    .btn-google { background: #fff; border: 1px solid #ccc; }
    .btn-google:hover { background: #f1f1f1; }

    .btn-facebook { background: #3b5998; color: white; }
    .btn-facebook:hover { background: #2d4373; }

    .btn-twitter { background: #1da1f2; color: white; }
    .btn-twitter:hover { background: #0d95e8; }

    .form-control:focus {
      box-shadow: none;
      border-color: #4e54c8;
    }
  </style>
</head>
<body>

  <div class="register-card animate__animated animate__fadeInDown">
    <h3 class="text-center mb-4">Create Your TruckFlow Account</h3>

    <!-- Social signup buttons -->
    <div class="d-grid gap-2 mb-3">
      <button class="social-btn btn-google">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><path fill="#4285f4" d="M24 9.5c3.5 0 6.7 1.3 9.2 3.4l6.8-6.8C35.2 2.4 29.9 0 24 0 14.8 0 6.9 5.6 3.2 13.5l7.9 6.2C13 13.1 18.1 9.5 24 9.5z"/><path fill="#34a853" d="M46.1 24.5c0-1.6-.1-3.1-.4-4.5H24v9h12.5c-1.1 3-3.3 5.5-6.2 7.1l7.7 6c4.5-4.2 7.1-10.4 7.1-17.6z"/><path fill="#fbbc04" d="M10.9 28.1c-.6-1.7-1-3.6-1-5.6s.4-3.9 1-5.6L3.1 10.6C1.1 14.2 0 18 0 22s1.1 7.8 3.1 11.4l7.8-5.3z"/><path fill="#ea4335" d="M24 44c5.9 0 11.2-1.9 15.1-5.1l-7.7-6c-2.1 1.4-4.7 2.1-7.4 2.1-5.9 0-10.9-4-12.7-9.5l-7.9 6.2C6.9 42.4 14.8 48 24 48z"/></svg>
        Sign up with Google
      </button>
      <button class="social-btn btn-facebook">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 32 32"><path d="M19 6h5V0h-5c-4 0-7 3-7 7v3H7v6h5v16h6V16h5l1-6h-6V7c0-1 1-1 1-1z"/></svg>
        Sign up with Facebook
      </button>
      <button class="social-btn btn-twitter">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512"><path d="M459.4 151.7c.3 4.2.3 8.5.3 12.7 0 130.7-99.5 281.4-281.4 281.4-56 0-108.1-16.4-152-44.8 7.9 1 15.8 1.6 24.3 1.6 46.3 0 88.8-15.8 122.8-42.7-43.4-.6-79.8-29.3-92.5-68.5 6.1 1 12.1 1.6 18.5 1.6 8.9 0 17.6-1.2 25.8-3.4-45.3-9.2-79.4-49-79.4-96.8v-1.3c13.3 7.4 28.5 11.9 44.5 12.4-26.4-17.6-43.4-47.7-43.4-81.6 0-18 4.8-34.5 13.3-48.9 48.7 59.8 121.6 99.2 203.7 103.4-1.6-7.2-2.4-14.7-2.4-22.3 0-54.3 44.1-98.3 98.3-98.3 28.3 0 53.9 11.9 71.8 31.3 22.5-4.2 43.8-12.4 62.8-23.4-7.4 23.4-23.1 43.1-43.8 55.4 20.1-2.1 39.3-7.7 57-15.4-13.8 20-31.2 37.6-51.2 51.6z"/></svg>
        Sign up with Twitter
      </button>
    </div>

    <form action="/register" method="POST">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      
      <div class="mb-3">
        <label for="name" class="form-label">Full Name</label>
        <input type="text" name="name" class="form-control" id="name" required placeholder="John Doe">
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email Address</label>
        <input type="email" name="email" class="form-control" id="email" required placeholder="you@example.com">
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="password" required placeholder="********">
      </div>

      <div class="mb-3">
        <label for="password_confirmation" class="form-label">Confirm Password</label>
        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" required placeholder="********">
      </div>

      <button type="submit" class="btn btn-primary w-100">Create Account</button>
    </form>

    <p class="text-center mt-3 small">Already have an account? <a href="/login">Sign in</a></p>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

