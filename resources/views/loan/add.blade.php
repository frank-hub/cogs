@extends('layout')
  @section('content')

  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <h1 class="h3 mb-4 text-gray-800">Add Loan</h1>
      <form method="post" action="{{route('post_loan')}}"> 
          @csrf
       
          <div class="form-group row">
            
              <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="number" name="amount_paid" class="form-control form-control-user" id="exampleFirstName" placeholder="Amount Paid">
              </div>


          </div>
          <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="number" name="balance" class="form-control form-control-user" id="exampleFirstName" placeholder="Balance">
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