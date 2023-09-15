@extends('master') <!-- Extend the 'master' layout -->

@section("content") <!-- Define the content section -->
<div class="custom-product">
    <div class="col-sm-10">
        <table class="table">
            <tbody>
                <!-- Display order summary -->
                <tr>
                    <td>Amount</td>
                    <td>$ {{$total}}</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>$ 0</td>
                </tr>
                <tr>
                    <td>Delivery</td>
                    <td>$ 10</td>
                </tr>
                <tr>
                    <td>Total Amount</td>
                    <td>$ {{$total+10}}</td>
                </tr>
            </tbody>
        </table>
        <div>
            <form action="/orderplace" method="POST">
                @csrf <!-- CSRF token for security -->

                <div class="form-group">
                    <!-- Textarea to enter address -->
                    <textarea name="address" placeholder="Enter your address" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="pwd">Payment Method</label> <br> <br>
                    <!-- Radio buttons for payment methods -->
                    <input type="radio" value="cash" name="payment"> <span>Online payment</span> <br> <br>
                    <input type="radio" value="cash" name="payment"> <span>EMI payment</span> <br><br>
                    <input type="radio" value="cash" name="payment"> <span>Payment on Delivery</span> <br> <br>
                </div>
                <button type="submit" class="btn btn-default">Order Now</button> <!-- Submit button for placing the order -->
            </form>
        </div>
    </div>
</div>
@endsection <!-- End of content section -->
