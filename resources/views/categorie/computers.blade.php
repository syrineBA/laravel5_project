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
               <p>  <h1>computers :</h1>
</td>  </p>

   @foreach($produits as $produits)
@if($produits->categorie =="computers")  
    <div class="col-lg-4">
       <p>   <image src="/uploads/image/{{$produits->image }} " style="width:150px ; height:150px ; float:left ; border-radius:50% ; margin-right:25px;">
</p>
       <p> <h4>TITLE : {{ $produits->title }}</h4>
            <p>CATEGORIE : {{ $produits->categorie }}</p>
            <p>DESCRIPTION: {{ $produits->description }}</p>
            <p>PRIX: {{ $produits->prix }}</p> 
              <a class="btn btn-info" href="AddPanier/{{$produits->id}}/{{Auth::user()->email}}">add to Basket</a>
               </p>
 </div> 
   
 @endif  
  @endforeach
            </div>
        </div>
    </div>
</div>
</div>
@endsection
