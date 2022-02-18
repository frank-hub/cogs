@extends('layout')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Add Buyer</h1>
    <form method="post" action="{{route('post_buyer')}}">
        @csrf
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="text" name="name" class="form-control form-control-user" id="exampleFirstName" placeholder="Full Name">
            </div>
            <div class="col-sm-6">
                <input type="text" name="contact" class="form-control form-control-user" id="exampleLastName" placeholder="Contact">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="text" name="location" class="form-control form-control-user" id="exampleFirstName" placeholder="Location">
            </div>
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="text" name="country" class="form-control form-control-user" id="exampleFirstName" placeholder="Country">
            </div>


        </div>
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="number" name="buying_price" class="form-control form-control-user" id="exampleFirstName" placeholder="Selling Price">
            </div>
            <div class="col-sm-6">
                <input type="number" name="no_kgs" class="form-control form-control-user" id="exampleLastName" placeholder="Numeber Of KGs">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="text" name="vehicle_no" class="form-control form-control-user" id="exampleFirstName" placeholder="Vehicle Number">
            </div>
            <div class="col-sm-6">
                <input type="text" name="driver_name" class="form-control form-control-user" id="exampleLastName" placeholder="Driver Name">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="text" name="driver_contact" class="form-control form-control-user" id="exampleFirstName" placeholder="Driver Contact">
            </div>
            <div class="col-sm-6">
                <input type="date" name="date_of_buying" class="form-control form-control-user" id="exampleLastName" placeholder=" Date of Selling">
            </div>
        </div>

</div>
<button type="submit" class="btn btn-block btn-primary">SUBMIT</button>
</form>

</div>
@endsection