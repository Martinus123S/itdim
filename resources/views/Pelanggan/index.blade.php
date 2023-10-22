@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD </h2>
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
            <th>Introduction</th>
            <th>Location</th>
            <th>Cost</th>
            <th>Date Created</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($pelanggan as $member)
            <tr>
                <td>{{ $member->IdPelanggan }}</td>
                <td>{{ $member->NamaPelanggan }}</td>
            </tr>
        @endforeach
    </table>

@endsection