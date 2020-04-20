@extends('layouts.app', [
  'namePage' => 'Edit Pasien',
  'activePage' => 'pasien',
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

			<form action="{{ route('pasien.update',['id'=>$pasien->id]) }}" method="post" enctype="multipart/form-data">

                {{ csrf_field() }}
                
                <div class="card card-primary" style="box-shadow: unset;">

                    <div class="card-header">
                        <h3 class="card-title">Edit Data</h3>
                    </div>
                    
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="form-group col-md-6 mr-4 ">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror" placeholder="Masukkan Username" value="{{ $pasien->username }}">
                                    @error('username')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6 mr-4 ">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Masukkan Password" value="{{ $pasien->password }}">
                                    @error('password')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6 mr-4 ">
                                    <label for="nama_user">Nama</label>
                                    <input type="text" name="nama_user" id="nama_user" class="form-control @error('nama_user') is-invalid @enderror" placeholder="Masukkan Nama" value="{{ $pasien->nama_user }}">
                                    @error('nama_user')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6 mr-4 ">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror" placeholder="Masukkan Alamat" value="{{ $pasien->alamat }}">
                                    @error('alamat')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6 mr-4 ">
                                    <label for="nohp_user">No. Telepon</label>
                                    <input type="number" name="nohp_user" id="nohp_user" class="form-control @error('nohp_user') is-invalid @enderror" placeholder="Masukkan Nomor Telepon" value="{{ $pasien->nohp_user }}">
                                    @error('nohp_user')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6 mr-4 ">
                                    <label for="umur">Umur</label>
                                    <input type="text" name="umur" id="umur" class="form-control @error('umur') is-invalid @enderror" placeholder="Masukkan Umur" value="{{ $pasien->umur }}">
                                    @error('umur')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6 mr-4 ">
                                    <label for="jeniskelamin">Jenis Kelamin</label>
                                    <input type="text" name="jeniskelamin" id="jeniskelamin" class="form-control @error('jeniskelamin') is-invalid @enderror" placeholder="Masukkan Jenis Kelamin" value="{{ $pasien->jeniskelamin }}">
                                    @error('jeniskelamin')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6 mr-4 ">
                                    <label for="goldarah">Golongan Darah</label>
                                    <input type="text" name="goldarah" id="goldarah" class="form-control @error('goldarah') is-invalid @enderror" placeholder="Masukkan Golongan Darah (A, B, AB, O)" value="{{ $pasien->goldarah }}">
                                    @error('goldarah')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6 mr-4 ">
                                    <label for="ttl_pasien">Tempat, Tanggal Lahir</label>
                                    <input type="text" name="ttl_pasien" id="ttl_pasien" class="form-control @error('ttl_pasien') is-invalid @enderror" placeholder="Masukkan Tempat, Tanggal Lahir" value="{{ $pasien->ttl_pasien }}">
                                    @error('ttl_pasien')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="keterangan">Keterangan</label>
                                    <textarea class="form-control @error('keterangan') is-invalid @enderror" rows="4" id="keterangan" name="keterangan" placeholder="Tambahkan Keterangan">{{ $pasien->keterangan }}</textarea>
                                    @error('keterangan')
                                        <div class="text-danger mt-1">{{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="card-footer bg-gradient-dark">
                        <div class="float-left">
                            <a href="{{ route('pasien.index') }}" class="btn btn-default">Back</a>
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