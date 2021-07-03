@extends('layout.layout')


@section('content')
<div class="container blur  p-3">
    <h3 class="text-white">contact us</h3>
<div class="row ">
    <div class="col-lg-6 col-sm ">
    <img src="assets/img/contact2.svg" class="img-fluid  ">
</div>


    <div class=" col-lg-6 cols-sm   mx-auto my-auto ">
<form action="/contact" method="POST" >   {{-- lo awaya har chyak bkain lanaw url badyar nakawe wache get nya  --}}
    @csrf     {{--awa attacty hackeran nahely ka laregay postawa hacky dakan --}}
 
      <input type="text" name="title" class="form-control rounded-pill" id="exampleFormControlInput1" placeholder="title report">
      <textarea name="desc" class="form-control form-control-lg mt-3   rounded-lg " id="exampleFormControlTextarea1" cols="30" rows="10" placeholder="description"></textarea>
      
  <button type="submit" class="btn bg-gradient-white btn-block text-dark mt-3 rounded-pill">send</button>
  </form>
</div>
</div>
</div>

  @endsection