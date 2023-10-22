@extends('layouts.app')
@section('content')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add Member</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('pelanggan.store') }}">
          @csrf
          <div class="form-group">    
              <label for="namaPelanggan">Nama Pelanggan:</label>
              <input type="text" class="form-control" name="namaPelanggan"/>
          </div>
          <div class="form-group">
              <label for="alamat">Alamat:</label>
              <input type="text" class="form-control" name="alamat"/>
          </div>
          <div class="form-group">
              <label for="noTelepon">No Telepon:</label>
              <input type="text" class="form-control" name="noTelepon"/>
          </div>
          <button type="submit" class="btn btn-primary-outline">Add member</button>
      </form>
  </div>
</div>
</div>
@endsection