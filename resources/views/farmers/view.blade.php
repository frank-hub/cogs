
@extends('layout')
@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th>Name</th>
                                            <th>Contact</th>
                                            <th>Location</th>
                                            <th>Country</th>
                                            <th> Selling Price</th>
                                            <th>No. Of KGS</th>
                                            <th>Vehicle No</th>
                                            <th>Driver Name</th>
                                            <th>Driver Contact</th>
                                            <th>Buying Date</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>Contact</th>
                                            <th>Location</th>
                                            <th>Country</th>
                                            <th> Selling Price</th>
                                            <th>No. Of KGS</th>
                                            <th>Vehicle No</th>
                                            <th>Driver Name</th>
                                            <th>Driver Contact</th>
                                            <th>Buying Date</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                    
                                    <!-- 'buying_price','car_no','kgs','comodity','border_cost','selling_price','kgs_sold_delivered','other_cost',
        'seller_name','seller_balance','buyer_payment_status' -->
                                        @foreach($farmers as $farmer)
                                            <tr>
                                                <td>{{$farmer->name}}</td>
                                                <td>{{$farmer->contact}}</td>
                                                <td>{{$farmer->location}}</td>
                                                <td>{{$farmer->country}}</td>
                                                <td>{{$farmer->selling_price}}</td>
                                                <td>{{$farmer->no_kgs}}</td>
                                                <td>{{$farmer->vehicle_no}}</td>
                                                <td>{{$farmer->driver_name}}</td>
                                                <td>{{$farmer->driver_contact}}</td>
                                                <td>{{$farmer->vehicle_no}}</td>
                                                <td>{{$farmer->date_of_buyin}}</td>  
                                                <td>{{$farmer->created_at->format('d/M/Y')}}</td>
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