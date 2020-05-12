<?php
use App\Http\Controllers\Controller;
$mainCategories = Controller::mainCategories();
?>

<header id="header"><!--header-->
<div class="header_top"><!--header_top-->
<div class="container">
<div class="row">
<div class="col-sm-6">
<div class="contactinfo">
    <ul class="nav nav-pills">
        <li><a href="#"><i class="fa fa-phone"></i> +62 812 3686 8738</a></li>
        <li><a href="#"><i class="fa fa-envelope"></i> admin@ibereality.com</a></li>
    </ul>
</div>
</div>
<div class="col-sm-6">
<div class="social-icons pull-right">
    <ul class="nav navbar-nav">
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
    </ul>
</div>
</div>
</div>
</div>
</div><!--/header_top-->

<div class="header-middle"><!--header-middle-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="logo pull-center">
                    <a href="{{url('http://localhost:8000/')}}">
                <div class="logo pull-left">
                    <a href="{{url('/')}}">
                        <img src="{{url('/images/frontend_img/home/ibes logo.png')}}" alt="" height="40" width="100" /></a>
                </div>
                </div>

            <div class="btn-group pull-right">
                <form action="{{ url('/')}}" method="get" class="form-inline">
                <div class="form-group">
                <input type="text" class="form-control" style="width:100%;" name="s" placeholder="Apa yang sedang dicari ?" value="{{isset($s) ? $s : ''}}">
                </div>
                <div class="form-group">
                <button class="btn btn-success" type="submit">Cari</button>
                </div>
                </form>
                </div>               

            <div class="btn-group pull-right" style="padding-right: 30px;">
                <div class="shop-menu pull-right">
                    <ul class="nav navbar-nav">
                        <li><a href="{{url('/orders')}}"><i class="fa fa-crosshairs"></i> Order</a></li>
                        <li><a href="{{url('/login-register')}}"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                        @if(empty(Auth::check()))
                            <li><a href="{{url('/login-register')}}"><i class="fa fa-lock"></i> Login</a></li>
                        @else
                            <li><a href="{{url('/account')}}"><i class="fa fa-user"></i> Account</a></li>
                            <li><a href="{{url('/user-logout')}}"><i class="fa fa-sign-out"></i> Logout</a></li>
                        @endif
                    </ul>
                </div>
            </div>



        </div>
    </div>
</div>

<div class="header-bottom"><!--header-bottom-->
<div class="container">
<div class="row pull-right">
<div class="">
<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
</div>
<div class="mainmenu pull-center">
    <ul class="nav navbar-nav collapse navbar-collapse">
    <li><a href="{{url('/')}}" class="active">Home</a></li>
        <li class="dropdown"><a href="#">All Product<i class="fa fa-angle-down"></i></a>
        <li><a href="404.html">Blog</a></li>
        <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
            <ul role="menu" class="sub-menu">
                @foreach($mainCategories as $cat)
            <li><a href="{{url('products/'.$cat->url)}}">{{$cat->Name}}</a></li>
                 @endforeach
            </ul>
        </li>
        <li><a href="404.html">Komponen Robot/Mesin</a></li>
        <li><a href="404.html">Robot RC</a></li>
        <li><a href="404.html">Industrial Robot</a></li>
        <li><a href="404.html">Medical Robot</a></li>
        <li><a href="404.html">Services AI, VR, AR, Games</a></li>
        <li><a href="404.html">About Us</a></li>
    </ul>
</div>
</div>
</div>
</div>
</div><!--/header-bottom-->
</header><!--/header-->
