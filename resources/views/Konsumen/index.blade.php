@extends('layouts.dashboard')
@section('title', 'Data Konsumen')

@section('content')
<div class="container-fluid">

<div class="row">
    <div class="col-md-12">

        <h2 class="page-title">Kelola Data Konsumen</h2>

        <!-- Zero Configuration Table -->
        <div class="panel panel-default">
            <div class="panel-body">
                <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No.Telepon</th>
                            <th>Email</th>
                            <th>Bergabung</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No. Telepon</th>
                            <th>Email</th>
                            <th>Bergabung</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($konsumen as $kons)
                        <tr>
                            <td> {{ $kons->name }}</td>
                            <td> {{ $kons->alamat }}</td>
                            <td> {{ $kons->no_telp }}</td>
                            <td> {{ $kons->email }}</td>
                            <td> {{ $kons->created_at->diffForHumans()}}</td>
                            <td> action </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
@endsection