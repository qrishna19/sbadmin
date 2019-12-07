@extends('base')
@section('konten')
<div class="card mb-3">
      <div class="card-header text-right">
          <a href="" class="btn btn-primary pull-right">Tambah</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th width="1">No</th>
                <th>Nama Artikel</th>
              </tr>
            </thead>
            <tbody>
              @foreach($article as $value)
              <tr>
                <td width="1">{{$value->id}}</td>
                <td>{{$value->nama}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
@endsection