@extends('guest.layout.base')

@section('documentTitle')
    {{ $title }}
@endsection

@section('content')
<main>
    <div class="jumbotron">
        <img src="{{asset('images/jumbotron.jpg')}}" alt="">
  </div>
    <div class="w70">
        <div class="current-box">
            <h2>current series</h2>
        </div>
              <div class="card-container d-flex">
          @foreach ($data as $card)
        <div class="card-thumbs">
            <div class="img-box">
                <img src="{{$card['thumb']}}" alt="">
            </div>
            <div class="title">
                <h3>{{$card['series']}}</h3>
            </div>
        </div>
        @endforeach
    <div class="button"><a href="">load more</a></div>
  </div>
      </div>
      
      
  <div class="main-link">
      <ul class="d-flex">

          <li><a href="">
              <div class="icon-box">
              <img src="{{asset('images/buy-comics-digital-comics.png')}}" alt="">   
              </div>
              <p>digital comics</p>       
            </a>
            </li>
          <li><a href="">
              <div class="icon-box">
              <img src="{{asset('images/buy-comics-merchandise.png')}}" alt="">  
              </div> 
              <p>dc merchandise</p>       
            </a>
            </li>
          <li><a href="">
              <div class="icon-box">
              <img src="{{asset('images/buy-comics-subscriptions.png')}}" alt="">   
              </div>
              <p>subscription</p>       
            </a>
            </li>
          <li><a href="">
              <div class="icon-box">
              <img src="{{asset('images/buy-comics-shop-locator.png')}}" alt=""> 
              </div>  
              <p>comic shop locator</p>       
            </a>
            </li>
          <li><a href="">
              <div class="icon-box">
              <img src="{{asset('images/buy-dc-power-visa.svg')}}" alt="">   
              </div>
              <p>dc power visa</p>       
            </a>
            </li>
      </ul>
  </div>
</main>


@endsection