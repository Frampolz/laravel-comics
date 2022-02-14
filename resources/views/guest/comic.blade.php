@extends('guest.layout.base')

@section('documentTitle')
    {{ $title }}
@endsection

@section('content')
<div class="single-comic-container">
    <div class="blue-row">
        <div class="inner-row w55">
            <div class="single-comic-thumb">
                <div class="img-box">
                    <img src="{{$singleComic['thumb']}}" alt="">
                    <div class="top-bagde">
                        <p>{{$singleComic['type']}}</p>
                    </div>
                    <div class="bottom-bagde">
                        <a href=""><p>view gallery</p></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shop-comic w55 d-flex">
        <div class="left-side w70">
            <div class="single-title">
                <h1>{{ $singleComic['title'] }}</h1>
            </div>
            <div class="shop-details d-flex">
                <div class="inner-shop-details w70 d-flex">
                    <div class="price">
                        <span>U.S. PRICE:</span> {{ $singleComic['price'] }}
                    </div>
                    <div class="available">
                        <span>available</span>
                    </div>
                </div>
                <a href="" class="check d-flex">
                    <span>Check availability <i class="fa-solid fa-caret-down"></i></span>
                </a>
            </div>
            <div class="description">
                <p>{{ $singleComic['description'] }}</p>
            </div>
        </div>
        <div class="right-side">
            <h4>advertisement</h4>
            <div class="adv">
                <img src="{{  asset('images/single-banner.jpg') }}" alt="">
            </div>
        </div>
    </div>
    <div class="comic-spec">
        <div class="inner-spec w55 d-flex">
            <div class="left-side-spec">
                <h2>Talent</h2>
                <div class="art d-flex">
                    <h5>Art by:</h5>
                    <div class="artist w70 text-left">
                        <h3>
                            @foreach ($singleComic['artists'] as $item)
                            <a href="">{{$item}}</a>,
                            @endforeach

                        </h3>
                    </div>
                </div>
                <div class="writers d-flex">
                    <h5>Written by:</h5>
                    <div class="writer w70 text-left">
                        <h3>
                            @foreach ($singleComic['writers'] as $item)
                            <a href="">{{$item}}</a>,
                            @endforeach
                        </h3>
                    </div>
                </div>
            </div>
            <div class="right-side-spec">
                <h2>Specs</h2>
                <div class="series d-flex">
                    <div class="left-box w30">
                        <h5>Series:</h5>
                    </div>
                    <div class="right-box w70 text-left">
                        <a href="">{{$singleComic['series']}}</a>,
                    </div>
                </div>
                <div class="us-price d-flex">
                    <div class="left-box w30">
                        <h5>U.S Price:</h5>
                    </div>
                    <div class="right-box w70 text-left">
                     <h3>{{$singleComic['price']}}</h3>
                    </div>
                </div>
                <div class="sale d-flex">
                    <div class="left-box w30">
                        <h5>On Sale Date:</h5>
                    </div>
                    <div class="right-box w70 text-left">
                     <h3>{{$singleComic['sale_date']}}</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="shop-link-container">
            <div class="inner-shop-link-container w70 d-flex">
                <a class="shop-link-box d-flex" href=""> 
                    <h3>digital comics</h3>
                    <div id="digital-phone"></div>
                </a>
                <a class="shop-link-box d-flex" href="">
                    <h3>shop dc</h3>
                    <div id="shop-comics"></div>
                </a>
                <a class="shop-link-box d-flex" href="">
                     <h3>comics shop locator</h3>
                     <div id="locator"></div>
                </a>
                <a class="shop-link-box d-flex" href="">
                    <h3>subscription</h3> 
                    <div id="sub"></div>
                </a>
            </div>
        </div>
    </div>
</div>
    
@endsection