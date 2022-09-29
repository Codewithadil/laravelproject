@extends('layouts.main')

@section('main-sections')

    <h1 class="text-center">{{$title}}</h1>
<form action="{{url('/')}}/register" method="post">
    @csrf

    {{-- <x-input type="text" name="name" label="Please Enter Your Name"/>
    <x-input type="email" name="email" label="Please Enter Your Email"/>
    <x-input type="text" name="message" label="Please Enter Comment"/> --}}

    <!-- <pre>
   @php
    print_r($errors->all()); //errors print method *******************
   @endphp
    </pre> -->
 

  <!-- Name input -->
  <div class="form-outline mb-4">
  <label class="form-label" for="form4Example1">Name</label>
    <input type="text" id="form4Example1" name="name" class="form-control"/>
   
    <span class="text-danger">
   @error ('name')
     {{$message}}
   @enderror
    </span>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
  <label class="form-label" for="form4Example2">Email address</label>
   {{-- <input type="email" id="form4Example2" name="email" class="form-control" value="{{$customer->email}}"/> --}}
    <input type="email" id="form4Example2" name="email" class="form-control"/>
    <span class="text-danger">
   @error ('email')
     {{$message}}
   @enderror
    </span>
  </div>

  <!-- Message input -->
  <div class="form-outline mb-4">
  <label class="form-label" for="form4Example3">Message</label>
  {{-- <textarea class="form-control" id="form4Example3" name="message" rows="4">{{$customer->message}}</textarea> --}}
    <textarea class="form-control" id="form4Example3" name="message" rows="4"></textarea>

   
    <span class="text-danger">
   @error ('message')
     {{$message}}
   @enderror
    </span>
  </div>

  <!-- Checkbox -->
  <div class="form-check d-flex justify-content-center mb-4">
  <label class="form-check-label" for="form4Example4">
      Send me a copy of this message
    </label>
    <input class="form-check-input me-2" type="checkbox" value="Send me a copy of this message"  name="checkbox" id="form4Example4"
    />
   
  </div>

  <!-- Submit button -->
  <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">Send</button>
</form>


@endsection
