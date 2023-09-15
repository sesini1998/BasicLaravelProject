@extends('master') <!-- Extend the 'master' layout -->

@section("content") <!-- Define the content section -->
<div class="custom-product">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
      
        <div class="carousel-inner">
          <!-- Loop through products and create carousel items -->
          @foreach ($products as $item)
            <div class="item {{$item['id']==1?'active':''}}">
              <a href="detail/{{$item['id']}}">
                <!-- Display product image and information -->
                <img class="slider-img" src="{{$item['gallery']}}">
                <div class="carousel-caption slider-text">
                  <h3>{{$item['name']}}</h3>
                  <p>{{$item['description']}}</p>
                </div>
              </a>
            </div>
          @endforeach
        </div>
      
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
    
    <div class="trending-wrapper">
      <h3>Trending Products</h3>
      <!-- Loop through products to display trending items -->
      @foreach($products as $item)
        <div class="trening-item">
          <a href="detail/{{$item['id']}}">
            <!-- Display product image and name -->
            <img class="trending-image" src="{{$item['gallery']}}">
            <div class="">
              <h3>{{$item['name']}}</h3>
            </div>
          </a>
        </div>
      @endforeach
    </div>
</div>
@endsection <!-- End of content section -->
