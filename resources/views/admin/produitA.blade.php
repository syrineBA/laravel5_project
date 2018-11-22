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
               <p>  <h1>product's list  :</h1>
                 <td>   <a class="btn btn-info" href="/ajout_produit">add a product</a>
</td>  </p>

<!-- dans une boucle et tester selon type de categorie --> 
   @foreach($produits as $produits)
    <div class="col-lg-4">
       <p>   <image src="/uploads/image/{{$produits->image }} " style="width:150px ; height:150px ; float:left ; border-radius:50% ; margin-right:25px;">
</p>
       <p> <h4>NAME :{{ $produits->title }}</h4>
            <p>CATEGORIE : {{ $produits->categorie }}</p>
            <p>DESCRIPTION: {{ $produits->description }}</p>
            <p>PRICE: {{ $produits->prix }}</p>  
              <a class="btn btn-info" href="#">add </a>
            <a class="btn btn-primary" href="deleteProduit/{{$produits->id}}">delete</a>    </p>
 </div><!-- /.col-lg-4 -->  
   
  @endforeach  
 <!-- /.col-lg-4 -->  
            </div>
        </div>
    </div>
</div>
</div>
@endsection
