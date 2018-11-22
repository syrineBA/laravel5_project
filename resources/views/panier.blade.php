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
                 <h1>Your basket</h1>
 
 <table class="table table-bordered">
  <tr>
    
    <td>Product's name</td>
    <td>Product category</td>
    <td>Product's price</td>
      <th width="280px">Action</th>  
  </tr>
  @foreach($paniers as $paniers)

    <tr>
     @if(Auth::user()->email == $paniers->emailClient  )
      <td>{{ $paniers->nomProduit }}</td>
      <td>{{ $paniers->categorieProduit }}</td>
      <td>{{ $paniers->prixProduit }}</td>
      <td><a class="btn btn-info" href="deletePanier/{{$paniers->id}}">supp</a></td>
    @endif
    </tr>

  @endforeach  


    </table>  
             
      <td><a class="btn btn-info" href="/delivery">validate</a></td>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

