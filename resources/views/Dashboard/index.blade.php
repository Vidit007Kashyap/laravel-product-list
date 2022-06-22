@extends('app')
@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.css') }}">
@endsection
@section('nav')
    @include('includes.nav')
@endsection
@section('content')
    <div class="products-list mt-5">

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Your Products</h6>
                            <a class="btn btn-primary btn-sm" href="{{ url('add-product') }}">Add Product</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>S.No.</th>
                                            <th>Product Name</th>
                                            <th>Category</th>
                                            <th>Description</th>
                                            <th>Price (&#8377;)</th>
                                        </tr>
                                    </thead>
                                    @php
                                        $products = App\Models\Product::all();
                                        $i = 1;
                                    @endphp
                                    {{-- <tfoot>
                                        <tr>
                                            <th>S.No.</th>
                                            <th>Product Name</th>
                                            <th>Category</th>
                                            <th>Description</th>
                                            <th>Price</th>
                                        </tr>
                                    </tfoot> --}}
                                    <tbody>
                                        @foreach ($products as $product)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $product->name }}</td>
                                                <td>{{ $product->category }}</td>
                                                <td>{{ $product->description }}</td>
                                                <td>{{ $product->price }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
@endsection
