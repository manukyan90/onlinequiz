@extends('layouts.admin')

@section('content')
    <div class="container">
        <form method="post" action="{{route('admin.subject.store')}}">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1"><b>Subject</b></label><br>
                <input type="text" name="name" class="form-control" placeholder="Enter subject">
            </div><br>

            <button type="submit" class="btn btn-primary">Add</button>

        </form>
    </div>
@endsection
