@if( Auth::guest())
@section('content')
<style>
         html{
                         background-color: #0A0A2A;
             }
             
    </style>  
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">failed</div>
                <div class="panel-body">
                    <td>sorry ,you are not admin !</td>
                     
                </div>
               
            
            </div>
        </div>
    </div>
</div>
@endsection
@endif


 <!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>admin</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/js/ie-emulation-modes-warning.js') }}"></script>




     <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
      <title>Responsive One Page website template</title>
      <link rel="stylesheet" href="css/components.css">
      <link rel="stylesheet" href="css/responsee.css">
      <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="owl-carousel/owl.theme.css">
      <!-- CUSTOM STYLE -->
      <link rel="stylesheet" href="css/template-style.css">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui.min.js"></script>    
      <script type="text/javascript" src="js/modernizr.js"></script>
      <script type="text/javascript" src="js/responsee.js"></script>
      <script type="text/javascript" src="js/template-scripts.js"></script> 
  </head>
<html>


@foreach($admins as $admins)
@if(Auth::user()->email == $admins->email)         
@extends('layouts.app')
@section('content')
<style>
         html{
                         background-color: #0A0A2A;
             }
             .container {        
               color: #D8D8D8;
            }
    </style>  
<div class="container-fluid">
  <div class="container">
      <div class="row">
      

       <div class="col-lg-4">
           <p> <h4>product's list </h4>  
              <a class="btn btn-default" href="/produits" role="button">show all &raquo;</a>   </p>
                     
            <p> <h4>clients's list</h4>
                  <a class="btn btn-default" href="/listClient" role="button">show all &raquo;</a> </p>
                     
                     <p> <h4>delivery's list </h4>                          
                            <a class="btn btn-default" href="#" role="button">voir la liste &raquo;</a>
                      </p>

                      <p> <h4>admin's list </h4>                          
                            <a class="btn btn-default" href="/listAdmin" role="button">show all &raquo;</a>
                      </p>

                       
</div></div></div></div>

@endsection 
 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="{{ asset('js/vendor/holder.min.js')}}"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{ asset('js/ie10-viewport-bug-workaround.js')}}"></script>

@endif
@endforeach

@if(Auth::user()->name)
@section('content')
<style>
         html{
                 background-color: #0A0A2A;
             }
             
    </style>  
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">failed</div>
                <div class="panel-body">
                    <td>sorry ,you are not admin !</td>
                     
                </div>
               
            
            </div>
        </div>
    </div>
</div>
@endsection
@endif






