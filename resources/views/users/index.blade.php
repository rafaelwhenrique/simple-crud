@extends('layouts.admin')
@section('content')
    <div class="container shadow"> 
        <div class="card border-light ">
            <div class="card-header">
                <span>
                    <button type="button" class="btn btn-info btn-sm"><a href="{{ route('users.create') }}" class="nav-link">Register User</a></button>
                </span>
            </div>
        </div>
        <x-alert/>   
        <table class="table table-striped table-bordered border-primary text-center table-sm">
            <thead>
                <tr>
                    <div class="text-center text-uppercase">
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Actions</th>
                    </div>    
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <div>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                    </div>

                    <td>
                        <div class="container w-auto p-3">
                            <button type="submit" class="btn btn-info btn-sm">
                                <a href="{{ route('users.show', ['user'=> $user->id]) }}">Show</a>
                            </button>
                            <button type="submit" class="btn btn-warning btn-sm" >
                                <a href="{{ route('users.edit', ['user'=> $user->id]) }}">Edit</a>
                            </button>
                            <form action="{{ route('users.destroy', ['user'=> $user->id]) }}" method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection()
    