@extends('layouts.dashboard')

@section('title', 'Tambah Data Konsumen')

@section('content')  

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h2 class="page-title">Tambah Data Konsumen</h2>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form action="{{ route('konsumen.store') }}" method="post" class="form-horizontal">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="kode_konsumen" class="col-lg-2 control-label">Kode Konsumen</label>
                                            <div class="col-lg-10">
                                                <input type="text" readonly value="{{ $kode }}" id="kode_konsumen" name="kode_konsumen" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nama" class="col-sm-2 control-label">Nama</label>
                                            <div class="col-sm-10">
                                                <input id="nama" name="nama" type="text" class="form-control" required><span class="help-block m-b-none">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email" class="col-sm-2 control-label">E-mail</label>
                                            <div class="col-sm-10">
                                                <input id="email" name="email" type="email" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="no_telp" class="col-sm-2 control-label">No.Telepon</label>
                                            <div class="col-sm-10">
                                                <input id="no_telp" name="no_telp" type="number" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                                            <div class="col-sm-10">
                                                <textarea id="alamat" name="alamat" class="form-control" rows="5" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hr-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <a href="/konsumen" class="btn btn-default" type="submit"><span class="glyphicon glyphicon-chevron-left"></span> Batal</a>
                                        <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-floppy-save"></span> Simpan</button>
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