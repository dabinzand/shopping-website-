@extends('layout.layout').

@section('content')


<div class="row justify-content-center mt-3  text-center">
    <div class="card m-2 p-3 " style="width:18rem;">
        <img src="assets/img/shoppers.svg" class="w-50 mx-auto ">
        <div class="card-body">
            <h5 class="card-title text-danger">shopers</h5>
            <a href="/shoper" class=" w-100 mx-auto btn bg-gradient-danger text-light  ">shoppers</a>
        </div>
    </div>
    <div class="card m-2 p-3" style="width:18rem;">
        <img src="assets/img/shopping.svg" class="  w-50 mx-auto">
        <div class="card-body">
            <h5 class="card-title text-primary">products</h5>
            <h5 class="text-danger">{{ session("file_order") }}</h5>
            <h5 class="text-success">{{ session("success_order") }}</h5>
            <a href="/card" class="w-100 mx-auto btn bg-gradient-primary text-light ">view products</a>
        </div>

    </div>
    <div class="card m-2 p-3" style="width:18rem;">
        <a href=""><img src="assets/img/login.svg" class=" w-50 mx-auto "></a>
        <div class="card-body">
            <h5 class="card-title text-info">login/register</h5>
            <a class="w-100 mx-auto btn bg-gradient-info text-light ">login</a>
        </div>
    </div>
    <div class="card m-2 p-3" style="width:18rem;">
        <a href=""><img src="assets/img/contact.svg" class=" w-50 mx-auto "></a>
        <div class="card-body">
            <h5 class="card-title text-info ">contact</h5>
            <h5 class="text-succsess">{{ session("success") }}</h5>
            <a href="/contact" class="  mx-auto btn bg-gradient-info  text-light w-100 ">contact us</a>
        </div>
    </div>
</div>
@endsection
