@extends('layout.layout')


@section('content')
<div class="row justify-content-center"> 

@for ( $i=0 ; $i<count($shopers) ; $i++)
    <div class="card m-2" style="width: 18rem;">
  <img src="\assets/img/shopper.svg" class="w-50 mx-auto " alt="...">
  <div class="card-body">
    <h5 class="card-title  text-center">{{$shopers[$i]['name']}}</h5>
    <p class="card-text  text-center ">{{$shopers[$i]['email']}}</p>
  <a href="/shoper/{{$shopers[$i]->id }}" class="btn btn-danger btn-block">view profile</a>
  </div>
</div>
@endfor
</div>
@endsection

