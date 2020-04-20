@extends('layouts.app', [
  'namePage' => 'Add Antrian',
  'activePage' => 'antrian',
])

@push('css')
  <style type="text/css">
    
    .content{
      margin-top: -250px !important;
    }

    .mrlbl{
    	margin-left: 20px;
    	margin-right: 10px;
    }

    .labeltop{
        margin-top: 10px;
    }

    .form-group input[type=file]{
        position: unset;
        opacity: unset;
    }

  </style>
@endpush

@section('content')
  <div class="panel-header panel-header-lg">
    
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
		<div class="card">

			<form action="{{ route('antrian.store') }}" method="post" enctype="multipart/form-data">

                {{ csrf_field() }}

                <div class="card card-primary" style="box-shadow: unset;">

                    <div class="card-header">
                        <h3 class="card-title">Add Data</h3>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="form-group">
                                    <label for="nama_pasien">Nama Pasien</label>
                                    <input type="text" name="nama_pasien" id="nama_pasien" class="form-control @error('nama_pasien') is-invalid @enderror" placeholder="Masukkan Nama" value="{{ old('nama_pasien') }}" required="">
                                    @error('nama_pasien')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="nama_rs">Nama RS</label>
                                    <input type="text" name="nama_rs" id="nama_rs" class="form-control @error('nama_rs') is-invalid @enderror" placeholder="Masukkan Rumah Sakit" value="{{ $nama_rs }}" readonly="">
                                    @error('nama_rs')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="jadwalpilihan">Jadwal Pilihan</label>
                                    <input type="text" name="jadwalpilihan" id="jadwalpilihan" class="form-control @error('jadwalpilihan') is-invalid @enderror" placeholder="Masukkan Jadwal" value="{{ old('jadwalpilihan') }}" required="">    
                                    @error('jadwalpilihan')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="keluhan">Keluhan</label>
                                    <input type="text" name="keluhan" id="keluhan" class="form-control @error('keluhan') is-invalid @enderror" placeholder="Masukkan Keluhan" value="{{ old('keluhan') }}" required="">     
                                    @error('keluhan')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="card-footer bg-gradient-dark">
                        <div class="float-left">
                            <a href="{{ route('antrian.index') }}" class="btn btn-default">Back</a>
                        </div>
                        <div class="float-right">
                            <button type="submit" class="btn btn-primary float-right">Add</button>
                        </div>
                    </div>

                </div>
            </form>

		</div>
      </div>
    </div>
  </div>

@endsection