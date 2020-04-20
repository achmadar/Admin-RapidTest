@extends('layouts.app', [
  'namePage' => 'Hasil Diagnosa',
  'activePage' => 'hasil',
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
      border-right: 1px solid #000;
      border-top: 1px solid #000;
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
            <h4 class="card-title">Hasil Pemeriksaan</h4>
            <div class="col-12 mt-2">
            </div>
          </div>
          <div class="card-body">
            <table id="myTable" class="table table-bordered table-hover table-striped tblind">
              <thead>
                <tr>
                  <th style="width: 30px">No.</th>
                  <th>Nama Pasien</th>
                  <th>Nama RS</th>
                  <th>Status</th>
                  <th>Keterangan</th>
                  <th style="width: 130px; border-right: 1px solid #000">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $no=1; ?>
                @foreach($hasil as $h)
                <tr>
                  <td style="text-align: center;">
                    {{ $no }}
                  </td>
                  <td>{{ $h->nama_pasien }}</td>
                  <td>{{ $h->nama_rs }}</td>
                  <td style="text-align: center;">{{ $h->status }}</td>
                  <td>{{ $h->keterangan }}</td>
                  <td style="text-align: center; border-right: 1px solid #000">
                      <!-- <a href="#" class="btn btn-info">
                        <i class="fa fa-eye"></i>
                      </a> -->
                      <a href="{{ route('hasil.edit', ['id'=>$h->id ]) }}" class="btn btn-success">
                        <i class="fas fa-pencil-alt"></i>
                      </a>
                      <a href="{{ route('hasil.destroy', ['id'=>$h->id ]) }}" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin ?');">
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

