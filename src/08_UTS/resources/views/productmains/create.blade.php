 
@extends('master.layout')
 
 @section('content')
<div class="container mt-5">
 
 <div class="row justify-content-center align-items-center">
 <div class="card" style="width: 24rem;">
 <div class="card-header">
 Tambah produk
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
 <form method="post" action="{{ route('productmains.store') }}" id="myFo
rm">
 @csrf
 <div class="form-group">
 <label for="tittle">tittle</label> 
 <input type="text" name="tittle" class="form-control" id="tittle" aria-describedby="tittle" > 
 </div>
 <div class="form-group">
 <label for="content">content</label> 
 <input type="content" name="content" class="form-control" id="content" aria-describedby="content" > 
 </div>
 <div class="form-group">
 <label for="image">image</label> 
 <input type="text" name="image" class="form-control" id="image" aria-describedby="image" > 
 </div>
 </div>
 <button type="submit" class="btn btn-primary">Submit</button>
 </div>
 </div>
 </div>
@endsection
