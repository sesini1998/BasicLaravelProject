@extends('master') <!-- Extend the 'master' layout -->

@section("content") <!-- Define the content section -->
<div class="custom-product">
     <div class="col-sm-4">
         <a href="#">Filter</a> <!-- Display a filter link -->
     </div>
     <div class="col-sm-4">
        <div class="trending-wrapper">
            <h4>Result for Products</h4> <!-- Display a heading for search results -->
            @foreach($products as $item)
            <!-- Loop through products and display search results -->
            <div class="searched-item">
              <a href="detail/{{$item['id']}}">
                <!-- Display product image, name, and description -->
                <img class="trending-image" src="{{$item['gallery']}}">
                <div class="">
                  <h2>{{$item['name']}}</h2>
                  <h5>{{$item['description']}}</h5>
                </div>
              </a>
            </div>
            @endforeach
          </div>
     </div>
</div>
@endsection <!-- End of content section -->
