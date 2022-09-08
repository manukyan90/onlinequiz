@extends('layouts.admin')

@section('content')
    <div class="container">
        <form  method="get" action="{{route('answers.index')}}">
            <table class="table table-striped">
                <thead>

                    <tr>
                        <th scope="col">Answers</th>
                        <th scope="col">Question</th>
                        <th scope="col">True</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$answer['title']}}</td>
                        <td>{{$answer['question_id']}}</td>
                        <td>{{$answer['is_true']}}</td>

                    </tr>
                </tbody>
            </table>
            <button type="submit" class="btn btn-primary">Back</button>
        </form>
    </div>
@endsection
