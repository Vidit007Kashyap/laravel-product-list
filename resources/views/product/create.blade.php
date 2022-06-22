@extends('app')
@section('nav')
    @include('includes.nav')
@endsection
@section('content')
    <div class="mt-4 mb-3">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3>Add Product</h3>
                    <h6>Please provide the details of the product below</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{url('add-product')}}" class="form-floating" method="POST">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="name" id="productName" placeholder="Product Name">
                        <label for="productName">Product Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="category" id="productCategory" placeholder="Product Category">
                        <label for="productCategory">Product Category</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="description" id="productDescription" placeholder="Product Description">
                        <label for="productDescription">Product Description</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" name="price" id="productPrice" placeholder="Product Price">
                        <label for="productPrice">Product Price</label>
                    </div>
                    <button class="btn btn-primary" type="submit">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
