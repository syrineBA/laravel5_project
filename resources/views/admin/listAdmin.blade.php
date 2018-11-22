 @if (Auth::guest() )
 @section('content')
 <style>
         html{
          background-color: #0A0A2A;
             }
             .container {            
               color: #424242;
          }

    </style>  
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">failed</div>

                <div class="panel-body">
                    sorry you are not admin !
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@else
@if(Auth::user()->email=="admin@gmail.com")
@extends('layouts.app')
@section('content')
<style>
         html{
          background-color: #0A0A2A;
             }
             .container {            
               color: #424242;
          }

    </style>  
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">welcome</div>

                <div class="panel-body">
                 <h1>admins's list :</h1>
 
 <table class="table table-bordered">
  <tr>
    
    <td>NAME</td>
    <td>EMAIL</td>
    <td>PASSWORD</td>
     <!-- <th width="280px">Action</th>  -->
    <td>            <a class="btn btn-info" href="/register_admin">add an admin</a>
</td>
  </tr>

  @foreach($admins as $admins)

    <tr>
      <td>{{ $admins->name }}</td>
      <td>{{ $admins->email }}</td>
      <td>{{ $admins->password }}</td>
      <td>
            <a class="btn btn-info" href="deleteAdmin/{{$admins->id}}">delete</a>
            <a class="btn btn-primary" href="#">Edit</a>
    </td>
    </tr>

  @endforeach

    </table>  
             

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@else 
 @section('content')
 <style>
         html{
          background-color: #0A0A2A;
             }
             .container {            
               color: #424242;
          }

    </style>  
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">failed</div>

                <div class="panel-body">
                    sorry you are not admin !
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@endif
@endif


