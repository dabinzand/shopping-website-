
@extends('layout.layout');
@section('content')
    {{ $userid }}

<div class="row justify-content-center "  >
    @foreach($products as  $product)
      

   <div class="card m-2" style="width:18rem;">
  <img class="w-50 mx-auto" src="..\assets/upload/{{$product->image}}" alt="">
    <div class="card-body " >
      <h5 class="card-title">{{$product->title}}</h5>
        <p class="card-text">{{$product->price}}</p>
        <div class="row">
        <a href="/shoper/{{ $product->userid }}/{{$product->id}}" class="btn btn-info ">more details </a>
    
            
        @if($product->userid==$userid)
        <a href="/delete/{{ $product->id }}" class="btn btn-danger ">delete</a>
            @endif
      </div>
    </div>
    </div>
    @endforeach
  </div>
  @endsection