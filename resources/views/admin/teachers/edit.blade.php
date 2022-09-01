@extends('layouts.admin')

@section('content')
    <div class="container">
        <form method="post" action="{{route('teachers.update', $teacher->id)}}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="exampleInput"><b>Teacher</b></label><br>
                <input type="text" name="name" class="form-control" placeholder="Enter teacher" value="{{$teacher->name}}">

                <label for="exampleInput"><b>Email</b></label><br>
                <input type="email" name="email" class="form-control" placeholder="Enter teacher" value="{{$teacher->email}}">

                <label for="exampleInput"><b>Subject</b></label><br>
                <select name="subject_id" class="form-control">
                    @foreach($subjects as $subject)
                        <option value="{{$subject->id}}">{{$subject->name}}</option>
                    @endforeach
                </select>

            </div><br>

            <button type="submit" class="btn btn-primary">Save</button>

        </form>
    </div>
@endsection
