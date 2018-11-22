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
                 <h1>Your delivary</h1>
 
  
  @foreach($paniers as $paniers)

     @if(Auth::user()->email == $paniers->emailClient  )
     <tr>
    
   <p> <td>Product's name  :  {{ $paniers->nomProduit }}</td> </p>
    <p> <td>Product category : {{ $paniers->categorieProduit }}</td> </p>
    <p> <td>Product's price  :  {{ $paniers->prixProduit }}</td> </p>
    <td>------------------------------------</td> </p>


     
       </tr>
  
    @endif


  @endforeach  
   <!-- <p> <td>THE SUM IS :  </td> </p>  -->


       
                </div>   

            </div>
        </div>
    </div>
</div>
@endsection

