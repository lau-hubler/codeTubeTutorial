@extends('layout')

@section('content')
<div class="row">
    <div class="col-md-6 offset-md-3">
        @if($message = Session::get('danger'))
            <div class="alert alert-danger">
                <strong>{{ $message }}</strong>
            </div>
        @endif
            <form action="{{ action('PostController@store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" type="text" name="name" id="name" placeholder="Nama Lengkap">
                </div>
                <div class="form-group">
                    <label for="detail">Detail</label>
                    <textarea class="form-control" name="detail" id="detail">Detail</textarea>
                </div>
                <div class="form-group">
                    <label for="author"></label>
                    <input class="form-control" type="text" name="author" id="author" placeholder="Pemilik">
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
    </div>
</div>
@endsection
