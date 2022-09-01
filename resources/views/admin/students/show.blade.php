@extends('layouts.admin')

@section('content')
    <div class="container">
        <form  method="get" action="{{route('students.index')}}">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Student</th>
                        <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$student['name']}}</td>
                        <td>{{$student['email']}}</td>
                    </tr>
                </tbody>
            </table>
            <button type="submit" class="btn btn-primary">Back</button>
        </form>
    </div>
@endsection
