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
            <h4 class="card-title">Pilih Rumah Sakit</h4>
            <div class="col-12 mt-2">
            </div>
          </div>
          <div class="card-body">
            @foreach($rumahsakit as $r)
            <a class="btn btn-primary btn-round text-white" style="background: #04809c; border: 2px solid black; font-size: 13px; margin: 10px" href="{{ route('antrian.show', ['nama_rs'=>$r->nama_rs ]) }}">
              <img src="{{ asset('img/logo2.png') }}" style="width: 100px; margin: 15px;">
              <br>
              {{ $r->nama_rs }}
            </a>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

