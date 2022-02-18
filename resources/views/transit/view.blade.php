


@extends('layout')
@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Loan</h1>
                   

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Loan</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                       
                                            <th>Fuel Cost</th>
                                            <th>Border Cost</th>
                                            <th>Exchange Rate</th>
                                            <th>Destination</th>
                                            <th>Pickup Location</th>
                                            <th>Date</th>
                                           
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                     
                                           
                                             <th>Fuel Cost</th>
                                            <th>Border Cost</th>
                                            <th>Exchange Rate</th>
                                            <th>Destination</th>
                                            <th>Pickup Location</th>
                                            <th>Date</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                    
                                    <!-- 'buying_price','car_no','kgs','comodity','border_cost','selling_price','kgs_sold_delivered','other_cost',
        'seller_name','seller_balance','buyer_payment_status' -->
                                        @foreach($transitBreakdown as $data)
                                            <tr>
                                                
                                                <td>{{$data->fuel_cost}}</td>
                                                <td>{{$data->border_cost}}</td>
                                                <td>{{$data->exchange_rate}}</td>
                                                <td>{{$data->destination}}</td>
                                                <td>{{$data->pickup_location}}</td>                                                
                                                <td>{{$data->date}}</td>
                                                
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            @endsection