@extends('layout.app')
@section('title', 'add user')
@section('content')
    <div class="card mt-4">
        <div class="card-header">Add User</div>
        <div class="card-body">
            <form action="{{ url('user') }}" method="post">
                {!! csrf_field() !!}
                <label>user name</label></br>
                <input type="text" name="name" id="name" class="form-control"></br>
                <label>email</label></br>
                <input type="text" name="email" id="address" class="form-control"></br>
                <label>phone</label></br>
                <input type="text" name="phone" id="address" class="form-control"></br>
                <label>password</label></br>
                <input type="text" name="password" id="password" class="form-control"></br>
                <div class="container">
                    <div class="row">
                        <button class="btn btn-success col-sm-1 mr-1"><a href="/user">back</a></button>
                        <input type="submit" value="Save" class="btn btn-success col-sm-1 ml-4 pl-4"></br>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
