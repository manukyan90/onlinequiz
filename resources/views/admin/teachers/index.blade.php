@extends('layouts.admin')

@section('content')


    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Teacher List</h2></div>
                    <div class="col-sm-4">
                        <a href="{{route('teachers.create')}}"><button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New Teacher</button></a>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Actions</th>
                </tr>
                </thead>

                <tbody>
                @foreach($teachers as $teacher)
                    <tr>
                        <td>{{$teacher->id}}</td>
                        <td>{{$teacher->name}}</td>
                        <td>{{$teacher->email}}</td>
                        <td>{{$teacher->subject->name}}</td>
                        <td>{{$teacher->created_at}}</td>
                        <td>{{$teacher->updated_at}}</td>
                        <td>
                            <a href = "{{route('teachers.show', $teacher->id)}}" class="show" title="Show" data-toggle="tooltip"><i class="material-icons"> &#xe8f4;</i></a>

                            <a href = "{{route('teachers.edit', $teacher->id)}}" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons"> &#xE254;</i></a>


                            <a href = "{{route('teachers.destroy', $teacher->id)}}" data-bs-toggle="modal" data-bs-target="#delete{{$teacher->id}}" title="Delete"><i class="material-icons">&#xE872;</i></a>

                            @include('admin.teachers.destroy')

                        </td>
                    </tr>

                 @endforeach
                </tbody>
            </table>
            <div class="mt-5">
                {{$teachers->links()}}
            </div>
        </div>

    </div>

@endsection
