@extends('layouts.adminLayout')
@section ('layanan')
active
@endsection
@section('konten')
<h3 align="center" class="mt-5">Edit Layanan {{ $layanan->nama }} </h3>
<hr>
<div class="container">
<form action="/admin/layanan/{{$layanan->id}}" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="mb-3">
    <label for="exampleInputText" class="form-label">Nama Layanan</label>
    <input type="text" class="form-control" name="nama" value="{{$layanan->nama}}" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputFile" class="form-label">Gambar</label><br>
    <img src="{{asset('Template/images/'.$layanan->gambar.'')}}" alt="" width="300"><br><br>
    <input type="file" class="form-control" name="gambar" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label">Keterangan</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="{{$layanan->keterangan}}" name="keterangan"required></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection