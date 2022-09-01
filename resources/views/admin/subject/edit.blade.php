@extends('layouts.admin')

@section('content')
    <div class="container">
        <form method="post" action="{{route('admin.subject.update', $data->id)}}">
            @csrf
            <div class="form-group">
                <label for="exampleInput"><b>Subject</b></label><br>
                <input type="text" name="name" class="form-control" placeholder="Enter subject" value="{{$data->name}}">
            </div><br>

            <button type="submit" class="btn btn-primary">Save</button>

        </form>
    </div>
@endsection
