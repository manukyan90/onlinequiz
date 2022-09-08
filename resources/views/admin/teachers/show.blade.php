@extends('layouts.admin')

@section('content')
    <div class="container">
        <form  method="get" action="{{route('teachers.index')}}">
            <div class="input-group" >
                <div>
                    <img src="/{{$teacher->image_url}}" width="100" height="100"><br><br>
                </div>
            </div>
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
