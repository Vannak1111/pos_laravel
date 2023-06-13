@extends('layout.app')
@section('title', 'add product')
@section('content')
    <div class="card mt-4">
        <div class="card-header">Add Product</div>
        <div class="card-body">
            <form action="{{ url('product') }}" method="POST">
                {!! csrf_field() !!}
                <label>user name</label></br>
                <input type="text" name="name" id="name" class="form-control"></br>
                <label>Type</label></br>
                <input type="text" name="type" id="type" class="form-control"></br>
                <label>Supplier_ID</label></br>
                <input type="text" name="supplier_id" id="supplier_id" class="form-control"></br>
                <label>Quantity</label></br>
                <input type="text" name="quantity" id="quantity" class="form-control"></br>
                <div class="container">
                    <div class="row">
                        <button class="btn btn-success col-sm-1 mr-1"><a href="/product">back</a></button>
                        <input type="submit" value="Save" class="btn btn-success col-sm-1 ml-4 pl-4"></br>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
