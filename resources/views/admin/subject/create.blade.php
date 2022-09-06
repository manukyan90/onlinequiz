@extends('layouts.admin')

@section('content')
    <div class="container">
        <form method="post" action="{{route('admin.subject.store')}}">
            @csrf
            <div class="form-group">
                <label for="exampleInput"><b>Subject</b></label><br>
                <input type="text" name="name" class="form-control" placeholder="Enter subject">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div><br>

            <button type="submit" class="btn btn-primary">Add</button>

        </form>
    </div>
@endsection
