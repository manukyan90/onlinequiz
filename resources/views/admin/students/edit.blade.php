@extends('layouts.admin')

@section('content')
    <div class="container">
        <form method="post" action="{{route('students.update', $student->id)}}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="exampleInput"><b>Student</b></label><br>
                <input type="text" name="name" class="form-control" placeholder="Enter teacher" value="{{$student->name}}">

                <label for="exampleInput"><b>Email</b></label><br>
                <input type="email" name="email" class="form-control" placeholder="Enter teacher" value="{{$student->email}}">
            </div><br>

            <button type="submit" class="btn btn-primary">Save</button>

        </form>
    </div>
@endsection
