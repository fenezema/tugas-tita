@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('create.mk.submit') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('nip') ? ' has-error' : '' }}">
                                <label for="nip" class="col-md-4 control-label">Kode Matakuliah</label>

                                <div class="col-md-6">
                                    <input id="nip" type="text" class="form-control" name="nip" value="{{ old('nip') }}" required autofocus>

                                    @if ($errors->has('nip'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('nip') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('dosen_id') ? ' has-error' : '' }}">
                                <label for="dosen_id" class="col-md-4 control-label">Dosen Pengajar</label>

                                <div class="col-md-6">
                                    <input id="dosen_id" type="text" class="form-control" name="dosen_id" value="{{ old('dosen_id') }}" required autofocus>

                                    @if ($errors->has('dosen_id'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('dosen_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('nama_mk') ? ' has-error' : '' }}">
                                <label for="nama_mk" class="col-md-4 control-label">Nama Matakuliah</label>

                                <div class="col-md-6">
                                    <input id="nama_mk" type="text" class="form-control" name="nama_mk" value="{{ old('nama_mk') }}" required>

                                    @if ($errors->has('nama_mk'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('nama_mk') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('jumlah_sks') ? ' has-error' : '' }}">
                                <label for="jumlah_sks" class="col-md-4 control-label">Jumlah SKS</label>

                                <div class="col-md-6">
                                    <input id="jumlah_sks" type="text" class="form-control" name="jumlah_sks" required>

                                    @if ($errors->has('jumlah_sks'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('jumlah_sks') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
