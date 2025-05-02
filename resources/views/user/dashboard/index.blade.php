@extends('layouts.user.index')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1>User Dashboard</h1>
                <p>Welcome to your dashboard!</p>
            </div>
        </div>
    </div>
    @auth
        <form action="{{ route('logout')}}" method="post">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
    @endauth
@endsection