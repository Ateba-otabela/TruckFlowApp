<x-layout>
    <h2 class="mb-4">Add a New Teacher Here</h2>
    <form action=" {{ Route('teacher_store') }}" method="post">
        @csrf

        @if (Session::has('fail'))
            <span class="text-danger">{{Session::get('fail')}}</span>
        @endif
        <div>
            <label for="name">Name</label>
            <input type="text" placeholder="Enter your name" class="form-control mb-3" name="name">
            @error('name')
              <span class="text-danger"> {{$message}} </span>
            @enderror
        </div>
       <div>
            <label for="name">Address</label>
            <input type="text" placeholder="Enter your address" class="form-control mb-3" name="address">
            @error('address')
              <span class="text-danger"> {{$message}} </span>
            @enderror
       </div>
       <div>
            <label for="email">Email</label>
            <input type="email" placeholder="Enter your email address" class="form-control mb-3" name="email">
            @error('email')
              <span class="text-danger"> {{$message}} </span>
            @enderror
       </div>
       <div>
            <label for="name">Mobile</label>
            <input type="text" placeholder="Enter your matricle" class="form-control mb-3" name="mobile">
            @error('mobile')
              <span class="text-danger"> {{$message}} </span>
            @enderror
       </div>
        <button type="submit" class="btn btn-primary mt-3">Add</button>
    </form>
 
</x-layout>