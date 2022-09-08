@extends('layouts.admin')

@section('content')
    <div class="container">
        <form  method="get" action="{{route('questions.index')}}">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Question</th>
                        <th scope="col">Subject</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$question['title']}}</td>
                        <td>{{$question['subject_id']}}</td>
                    </tr>
                </tbody>
            </table>
            <button type="submit" class="btn btn-primary">Back</button>
        </form>
    </div>
@endsection
