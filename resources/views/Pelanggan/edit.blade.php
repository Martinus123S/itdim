@extends('layouts.app') 
@section('content')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-1">Update a pelanggan</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('pelanggan.update', $pelanggan->IdPelanggan) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">
                <label for="first_name">Nama Pelanggan:</label>
                <input type="text" class="form-control" name="namaPelanggan" value="{{ $pelanggan->NamaPelanggan }}" />
            </div>
            <div class="form-group">
                <label for="last_name">ALamat:</label>
                <input type="text" class="form-control" name="alamat" value="{{ $pelanggan->Alamat}}" />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection