@extends('layouts.admin')

@section('content')
    <div class="container">
        @csrf
        <form>
            <div class="form-group">
                <label for="exampleInputEmail1"><b>Subject</b></label><br>
            </div><br>

            <button type="submit" class="btn btn-primary">Back</button>

        </form>
    </div>
@endsection
