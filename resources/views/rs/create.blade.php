@extends('layouts.app', [
  'namePage' => 'Add Rumah Sakit',
  'activePage' => 'rumahsakit',
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

  </style>
@endpush

@section('content')
  <div class="panel-header panel-header-lg">
    
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
		<div class="card">

			<form action="{{ route('rs.store') }}" method="post">

                {{ csrf_field() }}

                <div class="card card-primary" style="box-shadow: unset;">

                    <div class="card-header">
                        <h3 class="card-title">Add Data</h3>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-6 mr-4 ">

                                <div class="form-group">
                                    <label for="nama_rs">Nama RS</label>
                                    <input type="text" name="nama_rs" id="nama_rs" class="form-control @error('nama_rs') is-invalid @enderror" placeholder="Masukkan Nama" value="{{ old('nama_rs') }}">    
                                    @error('nama_rs')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="alamat_rs">Alamat RS</label>
                                    <input type="text" name="alamat_rs" id="alamat_rs" class="form-control @error('alamat_rs') is-invalid @enderror" placeholder="Masukkan Alamat" value="{{ old('alamat_rs') }}">    
                                    @error('alamat_rs')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="notelp_rs">No. Telepon</label>
                                    <input type="text" name="notelp_rs" id="notelp_rs" class="form-control @error('notelp_rs') is-invalid @enderror" placeholder="Masukkan Telepon" value="{{ old('notelp_rs') }}">    
                                    @error('notelp_rs')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="jadwal_rs">Jadwal RS</label>
                                    <input type="text" name="jadwal_rs" id="jadwal_rs" class="form-control @error('jadwal_rs') is-invalid @enderror" placeholder="Masukkan Jadwal" value="{{ old('jadwal_rs') }}">    
                                    @error('jadwal_rs')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
    							
                            </div>
                        </div>
                    </div>

                    <div class="card-footer bg-gradient-dark">
                        <div class="float-left">
                            <a href="{{ route('rs.index') }}" class="btn btn-default">Back</a>
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