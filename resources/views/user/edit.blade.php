@extends('layout.app')
@section('title', 'edit user')
@section('content')
    <div class="container-fluid bg-info pb-5 mt-4">
        <form action="{{ url('user', $user->id) }}" method="POST">
            {!! csrf_field() !!}
            @method('PUT')
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter Name" value="{{ $user->name }}">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputgmail">gmail</label>
                <input type="text" name="email" class="form-control" id="exampleInputPassword1" placeholder="gmail"
                    value="{{ $user->email }}">
            </div>
            <div class="form-group">
                <label for="exampleInputpassword">Password</label>
                <input type="text" name="password" class="form-control" id="exampleInputPassword1" placeholder="gmail"
                    value="{{ $user->password }}">
            </div>
            <button type="submit"class="btn btn-primary mt-lg-2-10">Submit</button>
        </form>
    </div>
@endsection
