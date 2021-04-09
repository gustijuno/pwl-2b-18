@extends('users.app')
@include('master.header')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                    <table class="table-responsive">
                        <tr><th>Username</th><th>:</th><td>{{$user->username}}</td></tr>
                        <tr><th>Name</th><th>:</th><td>{{$user->name}}</td></tr>
                        <tr><th>Email</th><th>:</th><td>{{$user->email}}</td></tr>
                        <tr><th>Created At</th><th>:</th><td>{{$user->created_at}}</td></tr>
                    </table>
                    <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection