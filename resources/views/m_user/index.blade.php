@extends('layouts.app')

@section('subtitle', 'M_User')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'CRUD User')

@section('content')
<div class="card card-secondary">
    <div class="card-header bg-light">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 style="font-size: 1.5rem;">CRUD User</h1>
                    <a class="btn btn-primary" href="{{ route('m_user.create') }}">Input User</a>
                </div>
            </div>
        </div>
    </div>

    <div class="card-body">
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center">User id</th>
                    <th class="text-center">Level id</th>
                    <th class="text-center">Username</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Password</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($useri as $m_user)
                <tr>
                    <td class="text-center">{{ $m_user->user_id }}</td>
                    <td class="text-center">{{ $m_user->level_id }}</td>
                    <td>{{ $m_user->username }}</td>
                    <td>{{ $m_user->nama }}</td>
                    <td>{{ $m_user->password }}</td>
                    <td class="text-center">
                        <form action="{{ route('m_user.destroy',$m_user->user_id) }}" method="POST" class="d-flex">
                            <a class="btn btn-info btn-sm mr-1" href="{{ route('m_user.show', $m_user->user_id) }}">Show</a>
                            <a class="btn btn-primary btn-sm mr-1" href="{{ route('m_user.edit', $m_user->user_id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
