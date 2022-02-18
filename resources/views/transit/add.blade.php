@extends('layout')
  @section('content')

  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <h1 class="h3 mb-4 text-gray-800">TRansit Breakdown</h1>
      <form method="post" action="{{route('post_transit')}}"> 
          @csrf
         
          <div class="form-group row">
            
              <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="number" name="fuel_cost" class="form-control form-control-user" id="exampleFirstName" placeholder="Fuel Cost">
              </div>
              <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="number" name="border_cost" class="form-control form-control-user" id="exampleFirstName" placeholder="Border Cost">
              </div>

          </div>
          <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="number" name="exchange_rate" class="form-control form-control-user" id="exampleFirstName" placeholder="Exchange Rate">
              </div>
              <div class="col-sm-6">
                  <input type="text" name="destination" class="form-control form-control-user" id="exampleLastName" placeholder="Destination">
              </div>
          </div>
          <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="text" name="pickup_location" class="form-control form-control-user" id="exampleFirstName" placeholder="Pickup Location">
              </div>
              <div class="col-sm-6">
                  <input type="date" name="date" class="form-control form-control-user" id="exampleLastName" placeholder="Date">
              </div>
          </div>
       

        </div>
        <button type="submit" class="btn btn-block btn-primary">SUBMIT</button>
    </form>

  
  <!-- /.container-fluid -->
 
  @endsection