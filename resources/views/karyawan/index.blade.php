@extends('layouts.dashboard')
@section('title', 'Data Karyawan')

@section('content')
<div class="container-fluid">

<div class="row">
    <div class="col-md-12">

        <h2 class="page-title">Kelola Data Karyawan</h2>

        <!-- Zero Configuration Table -->
        <div class="panel panel-default">
            <div class="panel-body">
                <a style="margin-bottom: 12px" href="/karyawan/create" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Tambah Data Karyawan</a>
                <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Kode Karyawan</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No.Telepon</th>
                            <th>Email</th>
                            <th>Bergabung</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Kode Konsumen</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No.Telepon</th>
                            <th>Email</th>
                            <th>Bergabung</th>
                            <th>Opsi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($karyawan as $kar)
                        <tr>
                            <td> {{ $kar->kode_user }}</td>
                            <td> {{ $kar->name }}</td>
                            <td> {{ $kar->alamat }}</td>
                            <td> {{ $kar->no_telp }}</td>
                            <td> {{ $kar->email }}</td>
                            <td> {{ $kar->created_at->diffForHumans()}}</td>
                            <td>
                                <div class="dropdown">
                                <i class="dropdown-toggle glyphicon glyphicon-option-vertical" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"></i>
                                    <ul style="margin-left:-7vw;" class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                        <li>
                                            <form action="{{ route('karyawan.edit', $kar->id) }}" method="post">
                                                @csrf 
                                                @method('GET')
                                                <button type="submit">
                                                    <i class="glyphicon glyphicon-pencil text-primary"></i> Ubah
                                                </button>
                                            </form>
                                        </li>
                                        <li>
                                            <form action="{{ route('karyawan.destroy', $kar->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button onclick="return deleteFunction()" type="submit">
                                                    <i class="glyphicon glyphicon-trash text-danger"></i> Hapus
                                                </button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </td>
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