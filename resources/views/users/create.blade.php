@extends('layouts.admin')
@section('content')
    <h1 class="text-center">Create User</h1>
    <div class="d-flex justify-content-center align-items-center">
        <form action="{{ route('users.store') }}" class="row g-3 w-50" method="POST">
            @csrf
            <div class="col-md-6">
                <label for="name" class="form-label">Name </label>
                <input type="text" name="name" id="inputName" class="form-control" aria-describedby="nameHelpInline" required>
            </div> 
            <div class="col-md-6">
                <label for="password" class="form-label">Password </label>
                <input type="password"  name="password" id="password" class="form-control" required>
            </div>
            <div class="col-md-12">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>                
            </div>
            <div class="col-12 d-flex justify-content-between mt-3">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{ route('users.index') }}" class="btn btn-secondary">Back</a>
            </div>
        </form>
    </div>

@endsection()
