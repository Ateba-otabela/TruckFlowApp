<x-layout>
@if (Session::has('success'))
            <span class="alert alert-success p-3">{{Session::get('success')}}</span>
        @endif
<div class="card">
    <div class="card-header">
        <h2>List of All Teachers</h2>
    </div>
    <div class="card-body">
        <a href="{{ Route('teacher_create') }}" class="btn btn-success btn-sm float-left">
    Add New
    </a>
        </br>
        </br>
        <div class="table">
            
            <table class="table table-strip">
                    <thead>
                        <th>S/N</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Actions</th>
                    </thead>
                    <tbody>
                   @foreach ($teachers as $teacher)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $teacher->name }}</td>
                                    <td>{{ $teacher->address }}</td>
                                    <td>{{ $teacher->email }}</td>
                                    <td>{{ $teacher->mobile }}</td>
                                    <td>
                                        <a href=""><button class="btn btn-info btn-sm">View</button></a>
                                        <a href=""><button class="btn btn-primary btn-sm">Edit</button></a>
                                        <a href=""><button class="btn btn-danger btn-sm">Delete</button></a>
                                    </td>
                                </tr>
                   @endforeach
                   
                    </tbody>
                  
           </table>
           <button class="btn btn-primary">Download</button>
        </div>
    </div>
</div>
</x-layout>