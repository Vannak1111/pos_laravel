@extends('layout.app')
@section('title', 'add supplier')
@section('content')
    <div class="card mt-4">
        <div class="card-header">Add User</div>
        <div class="card-body">
            <form action="{{ url('supplier') }}" method="post">
                {!! csrf_field() !!}
                <label>supplier name</label></br>
                <input type="text" name="name" id="name" class="form-control"></br>
                <label>company name</label></br>
                <input type="text" name="company_name" id="company_name" class="form-control"></br>
                <label>phone number</label></br>
                <input type="text" name="phone_number" id="phone_number" class="form-control"></br>
                <label>address</label></br>
                <input type="text" name="address" id="address" class="form-control"></br>
                <div class="container">
                    <div class="row">
                        <button class="btn btn-success col-sm-1 mr-1"><a href="/supplier">back</a></button>
                        <input type="submit" value="Save" class="btn btn-success col-sm-1 ml-4 pl-4"></br>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
