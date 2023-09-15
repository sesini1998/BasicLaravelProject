@extends('master') <!-- Extend the 'master' layout -->

@section("content") <!-- Define the content section -->
<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>my orders</h4> <!-- Heading for orders -->

            <!-- Loop through the orders using a foreach loop -->
            @foreach($orders as $item)
            <div class="row searched-item cart-list-devider">
                <div class="col-sm-3">
                    <!-- Create a link to the detail page with the product image -->
                    <a href="detail/{{$item->id}}">
                        <img class="trending-image" src="{{$item->gallery}}">
                    </a>
                </div>
                <div class="col-sm-4">
                    <div class="">
                        <!-- Display order details -->
                        <h2>Name : {{$item->name}}</h2>
                        <h5>Delivery Status : {{$item->status}}</h5>
                        <h5>Address : {{$item->address}}</h5>
                        <h5>Payment Status : {{$item->payment_status}}</h5>
                        <h5>Payment Method : {{$item->payment_method}}</h5>
                    </div>
                </div>
            </div>
            @endforeach <!-- End of foreach loop -->

        </div>
    </div>
</div>
@endsection <!-- End of content section -->
