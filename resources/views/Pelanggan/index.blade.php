@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pelanggan </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('pelanggan.create') }}" title="Create a project"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Alamat</th>
            <th>No Telepon</th>
            <th colspan="2">Action</th>
        </tr>
        @foreach ($pelanggan as $member)
            <tr>
                <td>{{ $member->IdPelanggan }}</td>
                <td>{{ $member->NamaPelanggan }}</td>
                <td>{{ $member->Alamat }}</td>
                <td>{{ $member->NoTelepon }}</td>
                <td>
                <a href="{{ route('pelanggan.edit',$member->IdPelanggan)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('pelanggan.destroy', $member->IdPelanggan)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
            </tr>
        @endforeach
    </table>

@endsection