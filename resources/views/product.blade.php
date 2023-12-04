@extends('master')
@section("content")
<div class="custom-product indicator">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
            <li data-target="#myCarousel" data-slide-to="6"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner display">

            @foreach ($products as $item)
            <div class="item {{$item['id']==1?'active':''}} indicator">
                <a href="detail/{{$item['id']}}">
                    <img class="slider-img center" src="{{$item['gallery']}}">
                    <div class="carousel-caption slider-text">
                        <h3>{{$item['name']}}</h3>
                        <h5>{{$item['description']}}</h5>
                    </div>
                </a>
            </div>


            @endforeach
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control indicator" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control indicator" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Trending Products -->
    <div class="Border-top">
        <div class="trending-wrapper ">
            <h3 class="text">TRENDING PRODUCTS</h3>
            @foreach($products as $item)
            <div class="trending-item Border-below">
                <a href="detail/{{$item['id']}}">
                    <img class="trending-image" src="{{$item['gallery']}}">
                    <div class="pname">
                        <h3>{{$item['name']}}</h3>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
</div>
@endsection