@extends('layouts.admin')

@section('content')
    <div class="container">
        <form method="post" action="{{route('answers.update', $answer->id)}}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="exampleInput"><b>Answer</b></label><br>
                <textarea name="title" rows="5" cols="122" placeholder="Enter answer" value="{{$answer->title}}"></textarea>

                <label for="exampleInput"><b>Question</b></label><br>
                <select name="question_id" class="form-control">
                    @foreach($questions as $question)
                        <option value="{{$question->id}}">{{$question->title}}</option>
                    @endforeach
                </select><br>
                <label for="answer" type="checkbox"><b>Correct answer</b></label>
                <input class="form-check-input" type="checkbox" name="is_true" value="1" {{old('is_true') == 1  ? '' : ''}} >


            </div><br>

            <button type="submit" class="btn btn-primary">Save</button>

        </form>
    </div>
@endsection
