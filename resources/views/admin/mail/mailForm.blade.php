@extends('layouts.admin')

@section('content')

<div class="container py-4">

    <form action="{{ route('send.mail') }}" class="contact100-form validate-form" method="post">
        @csrf
        @if(session()->has('message'))
         <div class="alert alert-success">
            {{ session()->get('message') }}
         </div>
        @endif

        <!-- Name input -->
        <div class="mb-3">
            <label class="form-label" for="name">Name</label>
            <input class="form-control" id="name" type="text" name="name" placeholder="Name" value="{{old('name')}}" data-sb-validations="required"  >
            <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
            @error('name')
               <span class="text-danger"> {{ $message }} </span>
            @enderror
        </div>

        <!-- Email address input -->
        <div class="mb-3">
            <label class="form-label" for="email">Email</label>
            <input class="form-control" id="emailAddress" type="email" name="email" placeholder="Email Address" value="{{old('email')}}" data-sb-validations="required, email" />
            <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is required.</div>
            <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
            @error('email')
                <span class="text-danger"> {{ $message }} </span>
            @enderror
        </div>

        <!-- Subject input -->
        <div class="mb-3">
            <label class="form-label" for="subject">Subject</label>
            <input class="form-control" id="subject" type="text" name="subject" placeholder="Subject" value="{{old('subject')}}" data-sb-validations="required"  >
            <div class="invalid-feedback" data-sb-feedback="name:required">Subject is required.</div>
            @error('subject')
                <span class="text-danger"> {{ $message }} </span>
            @enderror
        </div>


         <!-- Message input -->
        <div class="mb-3">
            <label class="form-label" for="message">Message</label>
            <textarea class="form-control" id="message" type="text" name="message" placeholder="Message" value="{{old('massage')}}" style="height: 10rem;" data-sb-validations="required"></textarea>
            <div class="invalid-feedback" data-sb-feedback="message:required">Message is required.</div>
            @error('message')
                <span class="text-danger"> {{ $message }} </span>
            @enderror
        </div>

        <div class="container-contact100-form-btn">
            <button type="submit" class="btn btn-primary btn-lg">Send</button>
        </div>
     </form>
</div>

@endsection



