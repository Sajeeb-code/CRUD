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
        </tr>
      
          
      @endforeach
    
   
  </tbody>
  
</table>    
  {{ $values->links() }}
@endsection