@extends('layouts.admin')

@section('content')


    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Answers List</h2></div>
                    <div class="col-sm-4">
                        <a href="{{route('answers.create')}}"><button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New Question</button></a>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Answers</th>
                    <th>Question</th>
                    <th>Answer</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Actions</th>
                </tr>
                </thead>

                <tbody>
                @foreach($answers as $answer)
                    <tr>
                        <td>{{$answer->id}}</td>
                        <td>{{$answer->title}}</td>
                        <td>{{$answer->question->title}}</td>
                        <td>{{$answer->is_true}}</td>
                        <td>{{$answer->created_at}}</td>
                        <td>{{$answer->updated_at}}</td>
                        <td>
                            <a href = "{{route('answers.show', $answer->id)}}" class="show" title="Show" data-toggle="tooltip"><i class="material-icons"> &#xe8f4;</i></a>

                            <a href = "{{route('answers.edit', $answer->id)}}" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons"> &#xE254;</i></a>


                            <a href = "{{route('answers.destroy', $answer->id)}}" data-bs-toggle="modal" data-bs-target="#delete{{$answer->id}}" title="Delete"><i class="material-icons">&#xE872;</i></a>

                            @include('admin.answers.destroy')

                        </td>
                    </tr>
            @endforeach
            </tbody>
            </table>
            <div class="mt-5">
                {{$answers->links()}}
            </div>
        </div>
    </div>
@endsection
