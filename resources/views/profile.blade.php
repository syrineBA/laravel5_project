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
                <div class="panel-heading">welcome to your profile </div>

                <div class="panel-body">
        

<image src="/uploads/image/{{Auth::user()->image }} " style="width:150px ; height:150px ; float:left ; border-radius:50% ; margin-right:25px;">

  <form method="POST" action="/profile/{{Auth::user()->id}}" enctype="multipart/form-data">
<label> Update your Profile's Image </label>
<input id="image" type="file" name="image" >
<input type="hidden" name="_token" value="{{ csrf_token() }}">

<input type="submit" class="pull-right btn btn-sm btn-primary">
</form>
 


 <table class="table table-bordered">
    <tr>
      <td>NAME</td>
      <td>{{ Auth::user()->name }}</td>
</tr>

<tr>
      <td>EMAIL</td>
      <td>{{ Auth::user()->email }}</td>
</tr>

    </table>  
             <td> <a class="btn btn-primary" href="/update">Edit</a>
       </td>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

