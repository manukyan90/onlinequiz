@extends('layouts.admin')

@section('content')
    <div class="container">
        <form method="post" action="{{route('students.store')}}">
            @csrf
            <div class="form-group">
                <label for="exampleInput"><b>Student</b></label><br>
                <input type="text" name="name" class="form-control" placeholder="Enter student"><br>
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="exampleInput"><b>Email</b></label><br>
                <input type="email" name="email" class="form-control" placeholder="Enter e-mail"><br>
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div><br>

            <button type="submit" class="btn btn-primary">Create</button>

        </form>
    </div>
@endsection
