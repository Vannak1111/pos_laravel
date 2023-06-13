@extends('layout.app')
@section('title', 'supplier')
@section('content')
    <div class="container-fluid">
        <div class="card-body">
            <a href="supplier/create" class="btn btn-success btn-sm mt-5">Add Supplier</a>
        </div>
        <table class="container-fluid table table-primary mt-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Supplier Name</th>
                    <th>Conpany Name</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($supplier as $key => $s)
                    <tr class="table-active">
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $s->name }}</td>
                        <td>{{ $s->company_name }}</td>
                        <td>{{ $s->phone_number }}</td>
                        <td>{{ $s->address }}</td>
                        <td>
                            {{-- @can('user_delete') --}}
                            <form action="{{ url('supplier', $s->id) }}" method="POST" {{-- onsubmit="return confirm('{{ trans('global.areYouSure') }}');"  --}}>
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" class="btn btn-xs btn-danger" value="Delete">
                            </form>
                            {{-- @endcan --}}

                            <button type="button" class="btn" method="put"
                                style="--bs-btn-padding-y: .15rem; --bs-btn-font-size: .65rem; background-color: steelblue; color: aliceblue">
                                <a href="supplier/{{ $s->id }}/edit">Edit</a> </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
