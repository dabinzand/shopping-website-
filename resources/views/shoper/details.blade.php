@extends('layout.layout');
@section('content')
<div class="row justify-content-center ">
    <div class="card m-2" style="width:40rem;">
        <img class="w-50 mx-auto" src="\assets/upload/{{$products->image}}" alt="">
        <div class="card-body ">
            <h5 class="card-title text-center"> title: {{$products->title}}</h5>
            <p class="card-text text-center">card id:{{$products->id}}</p>
            <p class="card-text text-center">price:{{$products->price}}</p>
            <p class="card-text text-center bg-secondary rounded-sm p-4">detail:{{$products->details}}
                <br>
                <form   method="POST"   action="/order">
                    @csrf
                <div class=" d-flex justify-content-center ">
                    @foreach ($products->sizes as $size)
                   <div class="custom-control custom-checkbox m-3">
                    <input class="custom-control-input" id="{{ $size }}" type="checkbox" name="sizes[]" value="{{$size}}">
                    <label class="custom-control-label" for="{{ $size }}">{{ $size}}</label>
                    
                  </div>
                    @endforeach
                    <input type="hidden" value={{ $products->id }} name="post_id">
                </div>
            </p>
            <button class="btn btn-success btn-block">add to card</button>
        </form>
        </div>
    </div>
</div>
@endsection
