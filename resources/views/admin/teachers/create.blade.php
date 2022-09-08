@extends('layouts.admin')

@section('content')
    <div class="container">
        <form method="post" action="{{route('teachers.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">

                <label for="exampleInput"><b>Teacher</b></label><br>
                <input type="text" name="name" class="form-control" placeholder="Enter teacher"><br>
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="exampleInput"><b>Email</b></label><br>
                <input type="email" name="email" class="form-control" placeholder="Enter e-mail"><br>
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="subject_id"><b>Subject</b></label><br>
                <select name="subject_id" class="form-control">
                    @foreach($subjects as $subject)
                        <option value="{{$subject->id}}">{{$subject->name}}</option>
                    @endforeach
                </select><br>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01"
                               aria-describedby="inputGroupFileAddon01" name="image_url">
                    </div>
                </div>
            </div><br>

            <button type="submit" class="btn btn-primary">Create</button>

        </form>
    </div>
@endsection
