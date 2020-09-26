@extends('student/app')

@section('contents')
<br>

    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Student Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Comments</th>
      <th scope="col">Created At</th>
      <th scope="col">Updated At</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($values as $value)

        <tr>
            <th scope="row">{{ $value->id }}</th>
            <td>{{ $value->student_name }}</td>
            <td>{{ $value->student_email }}</td>
            <td>{{ $value->student_address }}</td>
            <td>{{ $value->comments }}</td>
            <td>{{ $value->created_at->diffForhumans() }}</td>
            <td>{{ $value->updated_at->diffForhumans() }}</td>
            <td>
            <a href= {{ "edit/". $value->id }} class="btn btn-success">Edit</a>
                <a href={{"delete/" . $value->id }} class="btn btn-danger">Delete</a>
            </td>
        </tr>
      
          
      @endforeach
    
   
  </tbody>
  
</table>    
  {{ $values->links() }}
@endsection