@extends('layout.layout')
@section('content')

<div class="row bg-white rounded-lg p-2">
    <div class="col">
        @foreach ($cart as $cart )
            
   
        <table class="table">
            <h3>Cart</h3>
            <tbody>
                <tr>
                    <td><img src="assets/upload/2.jpg" width="50" alt=""></td>
                    <td>T-shirt</td>
                    <td>XL , M</td>
                    <td>100 IQD</td>
                    <td><a href="#" class="text-danger">Delete</a></td>
                </tr>
               
            </tbody>
        </table>
        @endforeach
    </div>

    <div class="col-lg-4 bg-lighter p-2 rounded-lg table-borderless">
        <h3>Total Order</h3>
        <table class="table">
            <tbody>
                <tr>
                    <td>2 Items</td>
                    <td>800 IQD</td>
                </tr>
                <tr>
                    <td>Delivery Fee</td>
                    <td>20 IQD</td>
                </tr>
                <tr>
                    <td><b>Total Cast</b></td>
                    <td><b>820 IQD<b></td>
                </tr>
            </tbody>
        </table>
        <button class="btn btn-darker rounded-lg w-100">PROCEED TO CHECKOUT</button>
    </div>
</div>
@endsection
