@extends('layouts.admin')

@section('content')
<div class="container horizontal-spacer">
    <div class="row">
      @if($message = Session::get('success'))
      <div class="alert alert-success" role="alert">
        {{ $message }}
      </div>
      @endif
      <table class="table table-hover text-center mt-5">
        <thead>
          <tr class="table-active">
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Foto</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Agama</th>
            <th scope="col">No telepon</th>
            <th scope="col">Dibuat</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data as $index => $employee)
          <tr>
            <th scope="row">{{ $index + $data->firstItem() }}</th>
            <td>{{$employee->nama}}</td>
            <td>
              <img src="{{ asset('photoemployee/'.$employee->foto) }}" alt="" style="max-width: 50px;">
            </td>
            <td>{{$employee->jenis_kelamin}}</td>
            <td>{{$employee->religions->nama}}</td>
            <td>{{$employee->no_telepon}}</td>
            <td>{{$employee->created_at->diffForHumans()}}</td>
            <!-- untuk hari dan tanggal -->
            <!-- <td>{{$employee->created_at->format('D M Y')}}</td> -->
            <td>
              <a href="/employee/{{ $employee->id }}" type="button" class="btn btn-primary">Edit</a>
              <button data-id="{{ $employee->id }}" type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</button>
            </td>
          </tr>
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  Are you sure to delete Employee "{{$employee->nama}}"
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                  <a href="/delete/{{ $employee->id }}" type="button" class="btn btn-danger">Delete</a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </tbody>
      </table>
    </div>
    <a href="/employee/insert" type="button" class="btn btn-success mb-5">Tambah</a>
    {{ $data->links() }}
  </div>
@endsection