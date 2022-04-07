@extends('layouts.adminLayout')
@section ('testimoni')
active
@endsection
@section('konten')
<h3 align="center" class="mt-5">Edit Testimoni {{ $testimoni->nama }} </h3>
<hr>
<div class="container">
<form action="/admin/testimoni/{{$testimoni->id}}" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="mb-3">
    <label for="exampleInputText" class="form-label">Nama testimoni</label>
    <input type="text" class="form-control" name="nama" value="{{$testimoni->nama}}" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputFile" class="form-label">Gambar</label><br>
    <img src="{{asset('Template/images/'.$testimoni->gambar.'')}}" alt="" width="300"><br><br>
    <input type="file" class="form-control" name="gambar" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label">Nama UMKM</label>
    <input type="text" class="form-control" name="umkm" value="{{$testimoni->umkm}}" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label">Keterangan</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="{{$testimoni->keterangan}}" name="keterangan"required></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection