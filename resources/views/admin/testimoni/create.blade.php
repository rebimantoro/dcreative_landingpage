@extends('layouts.adminLayout')
@section ('testimoni')
active
@endsection
@section('konten')
<h3 align="center" class="mt-5">Tambah testimoni </h3>
<hr>
<div class="container">
<form action="/admin/testimoni" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="mb-3">
    <label for="exampleInputText" class="form-label">Judul Testimoni</label>
    <input type="text" class="form-control" name="nama" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputFile" class="form-label">Gambar</label>
    <input type="file" class="form-control" name="gambar" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label">Nama UMKM</label>
    <input type="text" class="form-control" name="umkm" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label">Keterangan</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="keterangan"required></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection