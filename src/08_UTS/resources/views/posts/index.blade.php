@extends('posts.app')
@include('master.header')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>Comment Section</h1>
            <h5>Klik dan tulis komentar anda tentang produk kami</h5>
            @if (Auth::user() && Auth::user()->name == 'Administrator')
            <a href="{{ route('posts.create') }}" class="btn btn-success" style="float: right">Create Post</a>
            @endif
            <table class="table table-bordered">
                <thead>
                    <th width="80px">Id</th>
                    <th>Produk</th>
                    <th width="150px">Action</th>
                </thead>
                <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">Comment</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
   
            </table>
        </div>
    </div>
</div>
@endsection