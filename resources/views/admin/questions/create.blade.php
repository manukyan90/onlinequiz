@extends('layouts.admin')

@section('content')
    <div class="container">
     <form method="post" action="{{route('questions.store')}}">
            @csrf
            <div class="form-group">

                <label for="exampleInput"><b>Question</b></label><br>
                <textarea name="title" rows="5" cols="122" placeholder="Enter question"></textarea>
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="subject"><b>Subject</b></label><br>
                <select name="subject_id" class="form-control">
                    @foreach($subjects as $subject)
                        <option value="{{$subject->id}}">{{$subject->name}}</option>
                    @endforeach
                </select>
            </div><br>

            <button type="submit" class="btn btn-primary">Create</button>

        </form>
    </div>
@endsection
