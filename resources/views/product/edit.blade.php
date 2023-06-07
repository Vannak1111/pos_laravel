@extends('layout.app')
@section('title', 'edit product')
@section('content')
    <div class="container-fluid bg-info pb-5 mt-4">
        <form action="{{ url('product', $product->id) }}" method="POST">
            {!! csrf_field() !!}
            @method('PUT')
            <div class="form-group mt-4 pt-4">
                <label for="exampleInputEmail1">Product Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter Name" value="{{ $product->name }}">
            </div>
            <div class="form-group">
                <label for="exampleInputgmail">Type</label>
                <input type="selete" name="type" class="form-control" id="exampleInputPassword1" placeholder="type"
                    value="{{ $product->type }}">
            </div>
            <div class="form-group">
                <label for="exampleInputpassword">Quantity</label>
                <input type="text" name="quantity" class="form-control" id="exampleInputPassword1" placeholder="qunatity"
                    value="{{ $product->quantity }}">
            </div>
            <button type="submit"class="btn btn-primary mt-lg-2-10 mt-4">Submit</button>
        </form>
    </div>
@endsection
