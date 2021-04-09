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
 <form method="post" action="{{ route('productmains.update', $productmain->id) }}" id="myForm">
 @csrf
 @method('PUT') <div class="form-group">
 <label for="tittle">Tittle</label> 
 <input type="text" name="tittle" class="form-control" id="tittle" value="{{ $productmain->tittle}}" aria-describedby="tittle" > 
 </div>
 <div class="form-group">
 <label for="content">Content</label> 
 <input type="text" name="content" class="form-control" id="content" value="{{ $productmain->content }}" aria-describedby="content" > 
 </div>
 <div class="form-group">
 <label for="image">Image</label> 
 <input type="text" name="image" class="form-control" id="image" value="{{ $productmain->img }}" aria-describedby="image" > 
 </div>
 <button type="submit" class="btn btn-primary">Submit</button>
 </form>
 </div>
 </div>
 </div>
</div>
@endsection