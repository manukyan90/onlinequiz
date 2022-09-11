@extends('layouts.admin')

@section('content')


    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Students List</h2></div>
                    <div class="col-sm-4">
                        <a href="{{route('students.create')}}"><button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New Student</button></a>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
                </thead>

                <tbody>
                @foreach($students as $student)
                    <tr>
                        <td>{{$student->id}}</td>
                        <td>{{$student->name}}</td>
                        <td>{{$student->email}}</td>
                        <td>{{$student->created_at}}</td>
                        <td>{{$student->updated_at}}</td>
                        <td>
                            <a href = "{{route('students.show', $student->id)}}" class="show" title="Show" data-toggle="tooltip"><i class="material-icons"> &#xe8f4;</i></a>

                            <a href = "{{route('students.edit', $student->id)}}" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons"> &#xE254;</i></a>


                            <a href = "{{route('students.destroy', $student->id)}}" data-bs-toggle="modal" data-bs-target="#delete{{$student->id}}" title="Delete"><i class="material-icons">&#xE872;</i></a>

                            @include('admin.students.destroy')

                        </td>
                    </tr>
            @endforeach
                </tbody>
            </table>
            <div class="mt-4">
                {{$students->links()}}
            </div>
        </div>
    </div>
@endsection
