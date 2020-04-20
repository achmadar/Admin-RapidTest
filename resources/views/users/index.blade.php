@extends('layouts.app', [
  'namePage' => 'Admin',
  'activePage' => 'admin',
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
            <a class="btn btn-primary btn-round text-white pull-right" href="{{ route('users.create') }}">Add Admin</a>
            <h4 class="card-title">List Admin</h4>
            <div class="col-12 mt-2">
            </div>
          </div>
          <div class="card-body">
            <table id="myTable" class="table table-bordered table-hover table-striped tblind">
              <thead>
                <tr>
                  <th style="width: 30px">No.</th>
                  <th>Nama Admin</th>
                  <th>E-Mail</th>
                  <th style="width: 180px; border-right: 1px solid #000">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $no=1; ?>
                @foreach($users as $u)
                <tr>
                  <td style="text-align: center;">
                    {{ $no }}
                  </td>
                  <td>{{ $u->name }}</td>
                  <td>{{ $u->email }}</td>
                  <td style="text-align: center; border-right: 1px solid #000">
                      <a href="{{ route('users.show', ['id'=>$u->id ]) }}" class="btn btn-info">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('users.edit', ['id'=>$u->id ]) }}" class="btn btn-success">
                        <i class="fas fa-pencil-alt"></i>
                      </a>
                      <a href="{{ route('users.destroy', ['id'=>$u->id ]) }}" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin ?');">
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

