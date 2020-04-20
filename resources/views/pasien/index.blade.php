@extends('layouts.app', [
  'namePage' => 'Pasien',
  'activePage' => 'pasien',
])

@push('css')
  <style type="text/css">
    
    .content{
      margin-top: -250px !important;
    }

    th{
      text-align: center;
      background-color: #eac100;
      border-top: 1px solid #000 !important;
      border-left: 1px solid #000 !important;
      border-bottom: 1px solid #000 !important;
    }

    td{
      border-top: 1px solid #000 !important;
      border-left: 1px solid #000 !important;
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
          <div class="card-header">
            <a class="btn btn-primary btn-round text-white pull-right" href="{{ route('pasien.create') }}">Add Pasien</a>
            <h4 class="card-title">List Pasien</h4>
            <div class="col-12 mt-2">
            </div>
          </div>
          <div class="card-body">
            <table id="myTable" class="table table-bordered table-hover table-striped tblind">
              <thead>
                <tr>
                  <th style="width: 30px">No.</th>
                  <th>Nama Pasien</th>
                  <th>Username</th>
                  <th>Alamat</th>
                  <th>Telepon</th>
                  <th style="width: 180px; border-right: 1px solid #000">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $no=1; ?>
                @foreach($pasien as $p)
                <tr>
                  <td style="text-align: center;">
                    {{ $no }}
                  </td>
                  <td>{{ $p->nama_user }}</td>
                  <td>{{ $p->username }}</td>
                  <td>{{ $p->alamat }}</td>
                  <td>{{ $p->nohp_user }}</td>
                  <td style="text-align: center; border-right: 1px solid #000">
                      <a href="{{ route('pasien.show', ['id'=>$p->id ]) }}" class="btn btn-info">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('pasien.edit', ['id'=>$p->id ]) }}" class="btn btn-success">
                        <i class="fas fa-pencil-alt"></i>
                      </a>
                      <a href="{{ route('pasien.destroy', ['id'=>$p->id ]) }}" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin ?');">
                        <i class="fas fa-trash"></i>
                      </a>
                  </td>
                </tr>
                <?php $no++ ?>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

