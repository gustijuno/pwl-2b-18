@extends('master.layout')
 
@section('content')
 
<div class="container mt-5">
 
 <div class="row justify-content-center align-items-center">
 <div class="card" style="width: 24rem;">
 <div class="card-header">
 Edit Produk
 </div>
 <div class="card-body">
 @if ($errors->any())
 <div class="alert alert-danger">
 <strong>Whoops!</strong> There were some problems with your input.<br><br>
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 </div>
 @endif
 <form method="post" action="{{ route('users.update', $user->id) }}" id="myForm">
 @csrf
 @method('PUT') <div class="form-group">
 <label for="username">Username</label> 
 <input type="text" name="username" class="form-control" id="username" value="{{ $user->username}}" aria-describedby="username" > 
 </div>
 <div class="form-group">
 <label for="name">Name</label> 
 <input type="text" name="name" class="form-control" id="name" value="{{ $user->name }}" aria-describedby="name" > 
 </div>
 <div class="form-group">
 <label for="email">E-mail</label> 
 <input type="text" name="email" class="form-control" id="email" value="{{ $user->email }}" aria-describedby="email" > 
 </div>
 <div class="form-group">
 <label for="password">Password</label> 
 <input type="text" name="password" class="form-control" id="password" value="{{ $user->password }}" aria-describedby="password" > 
 </div>
 <button type="submit" class="btn btn-primary">Submit</button>
 </form>
 </div>
 </div>
 </div>
</div>
@endsection