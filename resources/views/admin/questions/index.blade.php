@extends('layouts.admin')

@section('content')


    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Questions List</h2></div>
                    <div class="col-sm-4">
                        <a href="{{route('questions.create')}}"><button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New Question</button></a>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Question</th>
                    <th>Subject</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Actions</th>
                </tr>
                </thead>

                <tbody>
                @foreach($questions as $question)
                    <tr>
                        <td>{{$question->id}}</td>
                        <td>{{$question->title}}</td>
                        <td>{{$question->subject->name}}</td>
                        <td>{{$question->created_at}}</td>
                        <td>{{$question->updated_at}}</td>
                        <td>
                            <a href = "{{route('questions.show', $question->id)}}" class="show" title="Show" data-toggle="tooltip"><i class="material-icons"> &#xe8f4;</i></a>

                            <a href = "{{route('questions.edit', $question->id)}}" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons"> &#xE254;</i></a>


                            <a href = "{{route('questions.destroy', $question->id)}}" data-bs-toggle="modal" data-bs-target="#delete{{$question->id}}" title="Delete"><i class="material-icons">&#xE872;</i></a>

                            @include('admin.questions.destroy')

                        </td>
                    </tr>
            @endforeach
        </div>
    </div>
@endsection
