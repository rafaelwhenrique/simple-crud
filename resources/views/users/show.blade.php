@extends('layouts.admin')
@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">Show User</h1>
        <div class="card w-50 mx-auto shadow">
            <div class="card-body">
                <div class="row mb-3">
                    <div><strong>ID</strong></div>
                    <div class="col-sm-9">{{ $user->id }}</div>
                </div>
                <div class="row mb-3">
                    <div><strong>Name</strong></div>
                    <div class=" text-nowrap">{{ $user->name }}</div>
                </div>
                <div class="row mb-3">
                    <div><strong>Email</strong></div>
                    <div class=" text-nowrap">{{ $user->email }}</div>
                </div>
                <div class="mt-4">
                    <a href="{{ route('users.index') }}" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </div>
    </div>

@endsection()