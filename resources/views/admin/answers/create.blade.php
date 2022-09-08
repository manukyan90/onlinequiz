@extends('layouts.admin')

@section('content')
    <div class="container">
     <form method="post" action="{{route('answers.store')}}">
            @csrf
            <div class="form-group">

                <label for="exampleInput"><b>Answer</b></label><br>
                <textarea name="title" rows="5" cols="122" placeholder="Enter answer"></textarea>
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="question"><b>Question</b></label><br>
                <select name="question_id" class="form-control">
                    @foreach($questions as $question)
                        <option value="{{$question->id}}">{{$question->title}}</option>
                    @endforeach
                </select><br>
                <label for="answer" type="checkbox"><b>Correct answer</b></label>
                <input class="form-check-input" type="checkbox" name="is_true" value="1" {{old('is_true',0) == 1 ? 'checked' : ''}} >


            </div><br>

            <button type="submit" class="btn btn-primary">Create</button>

        </form>
    </div>
@endsection
