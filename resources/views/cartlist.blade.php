@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-10">
        <a href="#">FILTER</a>
        <br><br>
    </div>


    <div class="trending-wrapper ">

        <a class="btn btn-success button" href="ordernow">Order Now</a>
        <br><br>
        @foreach($products as $item)
        <div class=" row searched-item cart-list-divider card">
            <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                    <img class="trending-image" src="{{$item->gallery}}">
                </a>
            </div>

            <br><br>
            <div class="col-sm-4">
                <div class="">
                    <h2>{{$item->name}}</h2>
                    <h5>{{$item->description}}</h5>
                </div>
            </div>

            <br><br>

            <div class="col-sm-3">
                <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove</a>
            </div>
        </div>
        @endforeach
    </div>
    <br> <br>

</div>
</div>
@endsection