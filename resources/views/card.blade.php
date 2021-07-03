@extends('layout.layout')


@section('content')

{{ $guest }}
<div class="row justify-content-center ">
    @for($i=0;$i<count($products);$i++) <div class="card m-2" style="width:18rem;">
        <img class="w-50 mx-auto" src="assets/upload/{{$products[$i]->image}}" alt="">
        <div class="card-body ">
            <h5 class="card-title">{{$products[$i]->title}}</h5>
            <p class="card-text">{{$products[$i]['price']}}</p>
            <div class="row">
                <a href="/shoper/{{ $products[$i]->userid }}/{{$products[$i]->id}}" class="btn btn-info  ">more details
                </a>

                @if($products[$i]->userid==$userid)
                <a href="/delete/{{ $products[$i]->id }}" class="btn btn-danger ">delete</a>
                @endif
            </div>
        </div>
</div>
@endfor
</div>


@endsection
