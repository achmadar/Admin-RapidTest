@extends('layouts.app', [
  'namePage' => 'Edit Hasil',
  'activePage' => 'hasil',
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

			<form action="{{ route('hasil.update',['id'=>$hasil->id]) }}" method="post" enctype="multipart/form-data">

                {{ csrf_field() }}
                
                <div class="card card-primary" style="box-shadow: unset;">

                    <div class="card-header">
                        <h3 class="card-title">Edit Data</h3>
                    </div>
                    
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="form-group">
                                    <label for="nama_pasien">Nama Pasien</label>
                                    <input type="text" name="nama_pasien" id="nama_pasien" class="form-control @error('nama_pasien') is-invalid @enderror" placeholder="Masukkan Nama" value="{{ $hasil->nama_pasien }}" required="">
                                    @error('nama_pasien')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="nama_rs">Nama RS</label>
                                    <input type="text" name="nama_rs" id="nama_rs" class="form-control @error('nama_rs') is-invalid @enderror" placeholder="Masukkan Rumah Sakit" value="{{ $hasil->nama_rs }}" required="">
                                    @error('nama_rs')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="jadwaltest">Jadwal Test</label>
                                    <input type="text" name="jadwaltest" id="jadwaltest" class="form-control @error('jadwaltest') is-invalid @enderror" placeholder="Masukkan jadwaltest" value="{{ $hasil->jadwaltest }}" required="">
                                    @error('jadwaltest')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>  

                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select class="form-control @error('status') is-invalid @enderror" id="status" name="status" required="">
                                        @if ($hasil->status == 'NEGATIF')
                                        <option value="NEGATIF" selected="">NEGATIF</option>
                                        <option value="POSITIF">POSITIF</option>
                                        @else
                                        <option value="NEGATIF">NEGATIF</option>
                                        <option value="POSITIF" selected="">POSITIF</option>
                                        @endif
                                    </select>
                                    @error('status')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>  

                                <div class="form-group">
                                    <label for="keterangan">Keterangan</label>
                                    <input type="text" name="keterangan" id="keterangan" class="form-control @error('keterangan') is-invalid @enderror" placeholder="Masukkan Jadwal" value="{{ $hasil->keterangan }}" required="">    
                                    @error('keterangan')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="card-footer bg-gradient-dark">
                        <div class="float-left">
                            <a href="{{ route('hasil.index') }}" class="btn btn-default">Back</a>
                        </div>
                        <div class="float-right">
                            <button type="submit" class="btn btn-primary float-right">Save</button>
                        </div>
                    </div>

                </div>
            </form>

		</div>
      </div>
    </div>
  </div>

@endsection