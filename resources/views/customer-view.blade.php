@extends('layouts.main')

@section('main-sections')
<a href="{{route('register')}}">
<button class="btn btn-primary d-inline-block m-2 float-right"> Add Customer</button>
</a>

<table class="table">

        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <!-- <th>Checkbox</th> -->
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $value)
            <tr>
                <td>{{$value->name}}</td>
                <td>{{$value->email}}</td>
                <td>{{$value->message}}</td>
                <!-- <td>{{$value->checkbox}}</td> -->
                <td>
                 <!-- <a href="{{url('/register/delete/')}}/{{$value->customer_id}}">  <button class="btn btn-danger">Delete</button></a>  -->
                 <a href="{{route('user.delete', ['id' => $value->customer_id])}}">  <button class="btn btn-danger">Delete</button></a> 
                 

                    
                </td>
                <td>
                   <a href="{{route('user.edit', ['id' => $value->customer_id])}}"> <button class="btn btn-primary">Edit</button> </a>
                
                </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>

    @endsection