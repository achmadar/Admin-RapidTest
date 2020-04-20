@extends('layouts.app', [
  'namePage' => 'Rumah Sakit',
  'activePage' => 'rumahsakit',
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
            <a class="btn btn-primary btn-round text-white pull-right" href="{{ route('rs.create') }}">Add Rumah Sakit</a>
            <h4 class="card-title">List Rumah Sakit</h4>
            <div class="col-12 mt-2">
            </div>
          </div>
          <div class="card-body">
            <table id="myTable" class="table table-bordered table-hover table-striped tblind">
              <thead>
                <tr>
                  <th style="width: 30px">No.</th>
                  <th>Nama RS</th>
                  <th>Alamat</th>
                  <th>Telepon</th>
                  <th>Jadwal</th>
                  <th style="width: 130px; border-right: 1px solid #000">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $no=1; ?>
                @foreach($rumahsakit as $r)
                <tr>
                  <td style="text-align: center;">
                    {{ $no }}
                  </td>
                  <td>{{ $r->nama_rs }}</td>
                  <td>{{ $r->alamat_rs }}</td>
                  <td style="text-align: center;">{{ $r->notelp_rs }}</td>
                  <td style="text-align: center;">{{ $r->jadwal_rs }}</td>
                  <td style="text-align: center; border-right: 1px solid #000">
                      <!-- <a href="#" class="btn btn-info">
                        <i class="fa fa-eye"></i>
                      </a> -->
                      <a href="{{ route('rs.edit', ['id'=>$r->id ]) }}" class="btn btn-success">
                        <i class="fas fa-pencil-alt"></i>
                      </a>
                      <a href="{{ route('rs.destroy', ['id'=>$r->id ]) }}" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin ?');">
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

