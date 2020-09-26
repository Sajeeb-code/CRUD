@extends('student/app')

@section('contents')

    <body>
    <h2 style="text-align: center"><b>Update Data</b></h2><hr>

    
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <form method="POST" action="/student_update">
                    @csrf

                    <input type="hidden" name="id" value="{{ $values->id }}">

                    <div class="form-group">
                        <label for="name">Students Name </label>
                    <input type="text" class="form-control" id="name" name="student_name" value="{{ $values->student_name }}">
                    </div>

                    <div class="form-group">
                        <label for="email">Students E-mail </label>
                        <input type="email" class="form-control" id="email" name="student_email" value="{{ $values->student_email }}">
                    </div>

                    <div class="form-group">
                        <label for="address">Students Address </label>
                        <input type="text" class="form-control" id="address" name="student_address" value="{{ $values->student_address }}">
                    </div>


                    <div class="form-group">
                        <label for="comments">Comments </label>
                        {{-- <input type="text" class="form-control" id="addr="comments" > --}}
                        <textarea class="form-control" id="comments" cols="70" rows="5" name="comments" >"{{ $values->comments }}"</textarea>
                    </div>
                    

                    <button type="submit" class="btn btn-success">Update</button>
                </form>
            </div>
        </div>



    </div>
    

</body>

@endsection