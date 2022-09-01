@extends('layouts.admin')

@section('content')
    <div class="container">
        <form  method="get" action="{{route('teachers.index')}}">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Teacher</th>
                        <th scope="col">Email</th>
                        <th scope="col">Subject</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$teacher['name']}}</td>
                        <td>{{$teacher['email']}}</td>
                        <td>{{$teacher['subject_id']}}</td>
                    </tr>
                </tbody>
            </table>
            <button type="submit" class="btn btn-primary">Back</button>
        </form>
    </div>
@endsection
