@extends('layouts.admin')

@section('content')


    <div class="container">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>Subjects List</h2></div>
                        <div class="col-sm-4">
                            <a href="{{route('admin.subject.create')}}"><button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button></a>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Actions</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($subjects as $subject)
                        <tr>
                            <td>{{$subject->id}}</td>
                            <td>{{$subject->name}}</td>
                            <td>{{$subject->created_at}}</td>
                            <td>{{$subject->updated_at}}</td>
                            <td>
                                <a href = "{{route('admin.subject.edit', $subject->id)}}" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons"> &#xE254;</i></a>
<!--
                                <a href = "{{--{{route('admin.subject.delete', $subject->id)}}--}}" class="delete" title="Delete" data-toggle="tooltip" data-target="#delete" onclick="return confirm('Are you sure you want to delete?')"><i class="material-icons">&#xE872;</i></a>
-->
                                <a href="{{route('admin.subject.delete', $subject->id)}}" data-bs-toggle="modal" data-bs-target="#delete{{$subject->id}}" title="Delete"><i class="material-icons">&#xE872;</i></a>

                                @include('admin.subject.delete')
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>

    </div>
@endsection


