@extends('layout.app')
@section('title', 'edit user')
@section('content')
    <div class="container-fluid bg-info pb-5 mt-4">
        <form action="{{ url('supplier', $supplier->id) }}" method="POST">
            {!! csrf_field() !!}
            @method('PUT')
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter Supplier Name" value="{{ $supplier->name }}">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputgmail">Company Name</label>
                <input type="text" name="company_name" class="form-control" id="exampleInputPassword1"
                    placeholder="Enter Company Name" value="{{ $supplier->company_name }}">
            </div>
            <div class="form-group">
                <label for="exampleInputpassword">Phone Number</label>
                <input type="text" name="phone_number" class="form-control" id="exampleInputPassword1"
                    placeholder="Enter Phone Number" value="{{ $supplier->phone_number }}">
            </div>
            <div class="form-group">
                <label for="exampleInputpassword">Address</label>
                <input type="text" name="address" class="form-control" id="exampleInputPassword1"
                    placeholder="Enter Address" value="{{ $supplier->address }}">
            </div>
            <button type="submit"class="btn btn-primary mt-lg-2-10">Submit</button>
        </form>
    </div>
@endsection
