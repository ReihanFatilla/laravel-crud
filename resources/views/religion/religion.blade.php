@extends('layouts.admin')
@section('content')
<div class="container horizontal-spacer">
    <div class="row">
      @if($message = Session::get('success'))
      <div class="alert alert-success" role="alert">
        {{ $message }}
      </div>
      @endif
      <table class="table table-hover text-center  mt-5">
        <thead>
          <tr class="table-active">
            <th scope="col">No</th>
            <th scope="col">Agama</th>
            <th scope="col">Dibuat</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @php
          $no = 1
          @endphp
          @foreach($data as $religion)
          <tr>
            <th scope="row">{{ $no++ }}</th>
            <td>{{$religion->nama}}</td>
            <td>{{$religion->created_at->diffForHumans()}}</td>
            <td>
              <a href="/religion/{{ $religion->id }}" type="button" class="btn btn-primary">Edit</a>
              <a href="/religion/delete/{{ $religion->id }}" type="button" class="btn btn-danger">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <a href="/religion/insert" type="button" class="btn btn-success">Tambah</a>
  </div>
@endsection