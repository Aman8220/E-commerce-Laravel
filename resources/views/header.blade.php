<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Session;

$total = 0;
if (Session::has('user')) {
    $total = ProductController::cartItem();
}
?>



<nav class="navbar navbar-default ">
    <div class="container-fluid navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="/"><img style="height:50px;width:50px"
                    src="https://w7.pngwing.com/pngs/798/196/png-transparent-computer-icons-shopping-cart-e-commerce-add-to-cart-button-purple-angle-text-thumbnail.png"
                    alt="Your Logo" /></a>
        </div>



        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">HOME</a></li>
                <li><a href="/myorders">ORDERS</a></li>
            </ul>
            <form action="/search" class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" name="query" class="form-control search-box" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">SEARCH</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/cartlist">CART({{$total}})</a></li>



                <!-- Dropdown for logout -->

                @if(Session::has('user'))
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/logout">LOGOUT</a></li>
                    </ul>
                </li>
                @else
                <li><a href="/login">LOGIN</a></li>
                <li><a href="/register">REGISTER</a></li>
                @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>