@extends('layouts.admin')
@section('content')
<h1 class="text-center">Edit User</h1>
    <x-alert/>
    <div class="d-flex justify-content-center align-items-center">
        <x-alert/>
        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="col-md-12">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
            </div>
            <div class="col-md-12">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
            </div>
            <div class="col-12 d-flex justify-content-between mt-3">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{ route('users.index') }}" class="btn btn-secondary">Back</a>
            </div>
        </form>
    </div>
@endsection()