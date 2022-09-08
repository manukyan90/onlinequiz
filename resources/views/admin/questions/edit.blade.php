@extends('layouts.admin')

@section('content')
    <div class="container">
        <form method="post" action="{{route('questions.update', $question->id)}}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="exampleInput"><b>Question</b></label><br>
                <textarea name="title" rows="5" cols="122" placeholder="Enter question" value="{{$question->title}}"></textarea>

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
