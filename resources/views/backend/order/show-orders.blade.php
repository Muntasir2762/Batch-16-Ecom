@extends('backend.master')

@section('content')
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Order List</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Order List</li>
                    </ol>
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content Header-->
    <!--begin::App Content-->
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h3 class="card-title">Manage Orders</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Order Date</th>
                                        <th>Invoice</th>
                                        <th>Product(s)</th>
                                        <th>Customer Info</th>
                                        <th>Price</th>
                                        <th>Delivery Charge</th>
                                        <th>Courier</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>2025-07-24 17:47:03</td>
                                        <td>XY-1</td>
                                        <td>
                                            <img src="https://placehold.co/100x100">
                                            Headphone X 1 <br>

                                            <img src="https://placehold.co/100x100">
                                            Headphone X 1 <br>

                                            <img src="https://placehold.co/100x100">
                                            Headphone X 1 <br>
                                        </td>
                                        <td>
                                            <p style="color: red">IP: 192.168.0.1</p>
                                            Name: Test Name
                                            <p style="color: green"><b>Phone: 0165676678</b></p>
                                            <strong class="text-primary">Address: Uttara, Sector-9, Dhaka</strong>
                                        </td>
                                        <td>12000</td>
                                        <td>80</td>
                                        <td>
                                            Steadfast
                                            <p class="text-success">GHHJG7667</p>
                                        </td>
                                        <td>Pending</td>
                                        <td>
                                             <a href="#" class="btn btn-primary">Details</a>
                                            <a href="#" onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>2025-07-24 17:47:03</td>
                                        <td>XY-1</td>
                                        <td>
                                            <img src="https://placehold.co/100x100">
                                            Headphone X 1 <br>

                                            <img src="https://placehold.co/100x100">
                                            Headphone X 1 <br>

                                            <img src="https://placehold.co/100x100">
                                            Headphone X 1 <br>
                                        </td>
                                        <td>
                                            <p style="color: red">IP: 192.168.0.1</p>
                                            Name: Test Name
                                            <p style="color: green"><b>Phone: 0165676678</b></p>
                                            <strong class="text-primary">Address: Uttara, Sector-9, Dhaka</strong>
                                        </td>
                                        <td>12000</td>
                                        <td>80</td>
                                        <td>
                                            Steadfast
                                            <p class="text-success">GHHJG7667</p>
                                        </td>
                                        <td>Pending</td>
                                        <td>
                                             <a href="#" class="btn btn-primary">Details</a>
                                            <a href="#" onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>2025-07-24 17:47:03</td>
                                        <td>XY-1</td>
                                        <td>
                                            <img src="https://placehold.co/100x100">
                                            Headphone X 1 <br>

                                            <img src="https://placehold.co/100x100">
                                            Headphone X 1 <br>

                                            <img src="https://placehold.co/100x100">
                                            Headphone X 1 <br>
                                        </td>
                                        <td>
                                            <p style="color: red">IP: 192.168.0.1</p>
                                            Name: Test Name
                                            <p style="color: green"><b>Phone: 0165676678</b></p>
                                            <strong class="text-primary">Address: Uttara, Sector-9, Dhaka</strong>
                                        </td>
                                        <td>12000</td>
                                        <td>80</td>
                                        <td>
                                            Steadfast
                                            <p class="text-success">GHHJG7667</p>
                                        </td>
                                        <td>Pending</td>
                                        <td>
                                             <a href="#" class="btn btn-primary">Details</a>
                                            <a href="#" onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content-->
@endsection
