@extends('layouts.dashboard')

@section('title', 'Edit Data Karyawan')

@section('content')  

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h2 class="page-title">Edit Data Karyawan</h2>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form action="{{ route('karyawan.update', $karyawan->id ) }}" method="post" class="form-horizontal" autocomplete="off">
                                @csrf
                                @method('PATCH')
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="kode_karyawan" class="col-lg-2 control-label">Kode Karyawan</label>
                                            <div class="col-lg-10">
                                                <input type="text" readonly value="{{ $karyawan->kode_user }}" id="kode_karyawan" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nama" class="col-sm-2 control-label">Nama</label>
                                            <div class="col-sm-10">
                                                <input id="nama" type="text" value="{{ $karyawan->name }}" class="form-control" name="nama" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email" class="col-sm-2 control-label">E-mail</label>
                                            <div class="col-sm-10">
                                                <input id="email" type="email" value="{{ $karyawan->email }}" class="form-control" name="email" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="no_telp" class="col-sm-2 control-label">No.Telepon</label>
                                            <div class="col-sm-10">
                                                <input id="no_telp" name="no_telp" type="number" value="{{ $karyawan->no_telp }}" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                                            <div class="col-sm-10">
                                                <textarea id="alamat" name="alamat" class="form-control" rows="5" required>{{ $karyawan->alamat }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hr-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <a href="/karyawan" class="btn btn-default" type="submit"> Batal</a>
                                        <button class="btn btn-primary" type="submit"> Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection