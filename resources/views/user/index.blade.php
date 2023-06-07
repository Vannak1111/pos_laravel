@extends('layout.app')
@section('title', 'User')
@section('content')
    <div class="container">
        <div class="card-body">
            <a href="user/create" class="btn btn-success btn-sm mt-5">Add User</a>
        </div>
        <table class="container-fluid table table-primary mt-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $key => $u)
                    <tr class="table-active">
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $u->name }}</td>
                        <td>{{ $u->email }}</td>
                        <td>
                            {{-- @can('user_delete') --}}
                            <form action="{{ url('user', $u->id) }}" method="POST" {{-- onsubmit="return confirm('{{ trans('global.areYouSure') }}');"  --}}>
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" class="btn btn-xs btn-danger" value="Delete">
                            </form>
                            {{-- @endcan --}}

                            <button type="button" class="btn" method="put"
                                style="--bs-btn-padding-y: .15rem; --bs-btn-font-size: .65rem; background-color: steelblue; color: aliceblue">
                                <a href="user/{{ $u->id }}/edit">Edit</a> </button>
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
