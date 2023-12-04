@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-10">
        <h3> All Calculations are in Indian National Rupee</h3>
        <table class="table table-striped">

            <tbody>
                <tr>
                    <td>AMOUNT</td>
                    <td>{{$total}}</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td> 0 </td>
                </tr>
                <tr>
                    <td>Delivery</td>
                    <td>500</td>

                </tr>
                <tr>
                    <td>Total Amount</td>
                    <td>{{$total+500}}</td>

                </tr>
            </tbody>
        </table>
        <div>
            <form action="/orderplace" method="POST">
                @csrf
                <div class="form-group">
                    <textarea name="address" placeholder="Enter Your Address" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="pwd">PAYMENT METHOD</label><br><br>
                    <input type="radio" value="cash" name="payment"><span>UPI PAYMENT</span><br><br>
                    <input type="radio" value="cash" name="payment"><span>PAY IN EMI</span><br><br>
                    <input type="radio" value="cash" name="payment"><span>CASH ON DELIVERY</span><br>
                </div>
                <button type="submit" class="btn btn-success">Order Now</button>
            </form>
        </div>


    </div>
</div>
@endsection