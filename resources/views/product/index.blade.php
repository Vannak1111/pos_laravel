@extends('layout.app')
@section('title', 'Product')
@section('content')
    <div class="container">
        <div class="card-body">
            <a href="product/create" class="btn btn-success btn-sm mt-5">Add Prodcut</a>
        </div>
        <table class="container-fluid table table-primary mt-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Type</th>
                    <th>Quantity</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($product as $key => $p)
                    <tr class="table-active">
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $p->name }}</td>
                        <td>{{ $p->type }}</td>
                        <td>{{ $p->quantity }}</td>
                        <td>
                            <form action="{{ url('product', $p->id) }}" method="POST">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="btn"
                                    style="--bs-btn-padding-y: .15rem; --bs-btn-font-size: .65rem; background-color: steelblue; color: aliceblue">
                                    Delete </button>
                            </form>
                            <button type="button" class="btn"
                                style="--bs-btn-padding-y: .15rem; --bs-btn-font-size: .65rem; background-color: steelblue; color: aliceblue">
                                <a href="product/{{ $p->id }}/edit">Edit</a> </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @php
        $isActive = false;
        $hasError = true;
    @endphp

    <span @class([
        'p-4',
        'font-bold' => $isActive,
        'text-gray-500' => !$isActive,
        'bg-red' => $hasError,
    ])></span>

@endsection
