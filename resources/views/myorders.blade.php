@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-10">
        <br><br>
    </div>


    <div class="trending-wrapper card">
        <br><br>
        <h4 class="text-1">MY ORDERS</h4>
        <br>
        @foreach($orders as $item)
        <div class=" row searched-item cart-list-divider">
            <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                    <img class="trending-image" src="{{$item->gallery}}">
                </a>
            </div>

            <br><br>
            <div class="col-sm-4">
                <div class="">
                    <h2>Name : {{$item->name}}</h2>
                    <h5>Delivery Status : {{$item->status}}</h5>
                    <h5>Address : {{$item->address}}</h5>
                    <h5>Payment Status : {{$item->payment_status}}</h5>
                    <h5>Payment Method : {{$item->payment_method}}</h5>
                </div>
            </div>
            <br><br>

            <br><br>
        </div>
        @endforeach
    </div>


    <br><br>


</div>
</div>
@endsection