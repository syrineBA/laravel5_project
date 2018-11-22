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
                 <h1>clients'list :</h1>
 
 <table class="table table-bordered">
  <tr>
    
    <td>NAME</td>
    <td>EMAIL</td>
    <td>PASSWORD</td>
      <th width="280px">Action</th>  
  </tr>
  @foreach($users as $users)

    <tr>
      <td>{{ $users->name }}</td>
      <td>{{ $users->email }}</td>
      <td>{{ $users->password }}</td>
      <td>
            <a class="btn btn-info" href="deleteClient/{{$users->id}}">supp</a>
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

