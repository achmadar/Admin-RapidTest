@extends('layouts.app', [
  'namePage' => 'Antrian Rumah Sakit',
  'activePage' => 'antrian',
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

    .bpr{
      top: 57px;
      right: 1.3%;
      position: absolute;
    }

    mark{
      background-color: #ff9c9c;
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
            <a class="btn btn-info btn-round text-white pull-right" href="{{ route('antrian.create', ['nama_rs'=>$nama_rs ]) }}">Tambah Antrian</a>
            <a class="btn btn-danger btn-round text-white pull-right bpr" href="{{ route('antrian.bersihkan', ['nama_rs'=>$nama_rs ]) }}">Bersihkan Antrian</a>
            <h4 class="card-title">{{ $nama_rs }}</h4>
            <h5 class="card-title">Jumlah Antrian = <mark>&nbsp;{{ $maxValue }}/50&nbsp;</mark></h5>
            <div class="col-12 mt-2">
            </div>
          </div>
          <div class="card-body">
            <table id="myTable" class="table table-bordered table-hover table-striped tblind">
              <thead>
                <tr>
                  <th style="width: 30px">No.</th>
                  <th>Nama Pasien</th>
                  <th>Rumah Sakit</th>
                  <th>Jadwal</th>
                  <th>Keluhan</th>
                  <th>Status</th>
                  <th style="width: 130px; border-right: 1px solid #000">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $no=1; ?>
                @foreach($antrian as $a)
                <tr>
                  <td style="text-align: center;">
                    {{ $no }}
                  </td>
                  <td>{{ $a->nama_pasien }}</td>
                  <td style="text-align: center;">{{ $a->nama_rs }}</td>
                  <td style="text-align: center;">{{ $a->jadwalpilihan }}</td>
                  <td>{{ $a->keluhan }}</td>
                  <td style="text-align: center;">{{ $a->status }}</td>
                  <td style="text-align: center; border-right: 1px solid #000">
                      <a href="{{ route('antrian.proses', ['id'=>$a->id ]) }}" class="btn btn-success">
                        <i class="now-ui-icons files_paper"></i>
                      </a>
                      <a href="{{ route('antrian.destroy', ['id'=>$a->id ]) }}" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin ?');">
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

